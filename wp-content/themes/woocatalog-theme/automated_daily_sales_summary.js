const firebaseAdmin = require('firebase-admin');
const nodemailer = require('nodemailer');
const WooCommerceAPI = require('@woocommerce/woocommerce-rest-api').default;

// Initialize WooCommerce API
const WooCommerce = new WooCommerceAPI({
    url: 'http://trovecredit.vps103216.mylogin.co',
    consumerKey: 'ck_69fdab4f35b2681c1f1acaff35554b8cb8404f4b',
    consumerSecret: 'cs_c69f987093b81064f4b69e3a80aef8fa2a09b8c5',
    wpAPI: true,
    version: 'wc/v3'
});

// Async function to fetch shop managers
async function fetchShopManagers() {
    try {
        const response = await WooCommerce.get('customers', {
            role: 'shop_manager'
        });
        const responseData = Array.isArray(response.data) ? response.data : [response.data];
        //console.log('Shop managers:', responseData);
        return responseData.map(user => user.email); // Extract emails from users
    } catch (error) {
        console.error('Error fetching shop managers:', error.message);
        throw error; // Rethrow the error to handle it elsewhere
    }
}

// Initialize Firebase Admin SDK
const serviceAccount = require('/home/.ssh/trovecredit-firebase-adminsdk-y3pux-3b6eae805f.json');
firebaseAdmin.initializeApp({
    credential: firebaseAdmin.credential.cert(serviceAccount),
    databaseURL: 'https://trovecredit-default-rtdb.firebaseio.com' // Replace with your database URL
});

// Initialize Nodemailer transporter
const transporter = nodemailer.createTransport({
    host: 'mail.vps102048.mylogin.co', // Your SMTP server host
    port: 465, // Your SMTP server port
    secure: true, // true for SSL
    auth: {
        user: 'israel@iecoding.com',
        pass: ''
    }
});

// Function to fetch daily sales data from Realtime Database
// Function to fetch daily sales data from Realtime Database
async function fetchDailySalesData() {
  const today = new Date().toISOString().split('T')[0];
  const snapshot = await firebaseAdmin.database().ref('sales/' + today).once('value');
  console.dir(snapshot.val());
  return snapshot.val();
}

// Function to compile and send daily sales summary email
async function sendDailySalesSummaryEmail() {
    try {
        // Fetch WooCommerce admins and shop managers
        const staffEmails = await fetchShopManagers();

        // Fetch daily sales data
        const salesData = await fetchDailySalesData();
        console.log('Sales data for today:', salesData);

        // Compile email content
        let emailContent = `<h1>Daily Sales Summary</h1>`;
        if (salesData && salesData.orders) {
            emailContent += `<p>Total Sales: ${Object.keys(salesData.orders).length}</p>`;
            emailContent += `<p>Top Selling Products:</p>`;
            emailContent += `<ul>`;
            const topSellingProducts = Object.values(salesData.orders).sort((a, b) => b.quantity - a.quantity).slice(0, 5); // Get top 5 selling products
            topSellingProducts.forEach(product => {
                emailContent += `<li>${product.product}: ${product.quantity}</li>`;
            });
            emailContent += `</ul>`;
        } else {
            emailContent += `<p>No sales data available for today.</p>`;
        }

        // Send email
        const mailOptions = {
            from: 'israel@iecoding.com',
            to: staffEmails.join(', '),
            subject: `Daily Sales Summary`,
            html: emailContent
        };
        await transporter.sendMail(mailOptions);
        console.log('Daily sales summary email sent successfully!');
    } catch (error) {
        console.error('Error sending daily sales summary email:', error.message);
        throw error;
    }
}

// Call the function to send daily sales summary email
sendDailySalesSummaryEmail();