WooCommerceAPI = require("@woocommerce/woocommerce-rest-api").default;

const { initializeApp } = require('firebase/app');
const { getDatabase, ref, push, serverTimestamp } = require('firebase/database');


// Initialize Firebase
const firebaseConfig = {
    apiKey: "AIzaSyCm61Nsxg0bb5qwCRuiuKHlsCxX55uXGwQ",
    authDomain: "trovecredit.firebaseapp.com",
    databaseURL: "https://trovecredit-default-rtdb.firebaseio.com",
    projectId: "trovecredit",
    storageBucket: "trovecredit.appspot.com",
    messagingSenderId: "1073920149374",
    appId: "1:1073920149374:web:638d6e6a7864a5064a552f"
};
// Import the functions you need from the SDKs you need

//var database = firebase.database();

// Initialize WooCommerce API
const WooCommerce = new WooCommerceAPI({
    url: 'http://trovecredit.vps103216.mylogin.co',
    consumerKey: 'ck_69fdab4f35b2681c1f1acaff35554b8cb8404f4b',
    consumerSecret: 'cs_c69f987093b81064f4b69e3a80aef8fa2a09b8c5',
    wpAPI: true,
    version: 'wc/v3'
});

const firebaseApp = initializeApp(firebaseConfig);

// Get a reference to the Realtime Database service
const db = getDatabase(firebaseApp);


// Function to track sale and store in Realtime Database
async function trackSale() {
    try {
        // Fetch recent orders from WooCommerce
        const response = await WooCommerce.get('orders', { per_page: 10 });
        const orders = response.data;

// Process each order and store in Realtime Database
for (const order of orders) {
    // Check if there are line items in the order and at least one line item has a name
    if (order.line_items && order.line_items.length > 0 && order.line_items[0].name) {
        const productName = order.line_items[0].name; // Get the product name from the first line item
        const quantity = order.quantity || 1; // Default to 1 if quantity is undefined
        const orderData = {
            product: productName,
            quantity: quantity,
            timestamp: serverTimestamp() // Use serverTimestamp() method
        };
        // Push order data to the 'sales' node under the current date
        push(ref(db, `sales/${formatDate(new Date())}/orders`), orderData);
    } else {
        console.warn("Skipping order without product name:", order);
    }
}

        console.log("Sales tracked and stored in Realtime Database successfully!");
    } catch (error) {
        console.error("Error tracking sales:", error);
    }
}

// Call the trackSale function
trackSale();

// Helper function to format date as yyyy-mm-dd
function formatDate(date) {
    const year = date.getFullYear();
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const day = String(date.getDate()).padStart(2, '0');
    return `${year}-${month}-${day}`;
}