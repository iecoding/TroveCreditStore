

# TroveCreditStore
Full-Stack Engineer Code Challenge: WooCommerce Digital Store with Firebase Tracking and Reporting

> Live URL: https://trovecredit.vps103216.mylogin.co/ 
> Admin URL: https://trovecredit.vps103216.mylogin.co/wp-login.php

    shop_manager / 7XH9AoHLWbY)kyxyAq7WEHSt

## Instructions
1) Clone repo (it includes Wordpress) to your webserver. If needed run the search & replace database string with [WPCLI](https://developer.wordpress.org/cli/commands/search-replace/)
2) Import database: `./database.sql`
3) `cd ./wp-content/themes/woocatalog-theme/` 
4) Use node.js v20 with `nvm use 20` and do `npm install && npm run build` 
5) Enjoy

> For development you must set your local URL on line 8 of package.json just change `trovecredit.vps103216.mylogin.co`

## Documentation:
I'm using one of my custom themes (woocatalog-theme) and tailor it to achieve the requirements.

I've created the **WooCatalog Theme** a few months ago to learn **TailWindCSS** . I've implemented default woocommerce theme and made some adjustments using **hooks** (keep it simple and compatible with future updates). For mobile experience I adopted a sticky CTA similar to Storefront.

**Notice that CMB2 plugin is required (just for theme settings).**

Firebase integrations are fully apart from wordpress, those are 2 simply node.js scripts configured with cron jobs and run everyday between 23:55 and 23:59.

You can find those scripts `track_sales.js` and `automated_daily_sales_summary.js` inside of theme's folder. I used the official firebase npm packages.

Thanks
