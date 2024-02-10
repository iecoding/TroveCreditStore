<footer class="bg-gray-900 mt-32">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="<?php echo bloginfo('url'); ?>" class="flex items-center">
                    <span class="self-center font-semibold whitespace-nowrap text-white">TroveCredit</span>
                </a>
                <p class="text-white text-xs">
                    California. USA.<br>
                    +1 554 192 5919<br>
                    contacto@trovecredit.com<br>
                    https://trovecredit.com<br>
                    </p>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white">Navigation</h2>
                    <ul class="text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="<?php echo bloginfo('url'); ?>/on-sales/" class="hover:underline">On Sale</a>
                        </li>
                        <li>
                            <a href="<?php echo bloginfo('url'); ?>/shop/" class="hover:underline">All products</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white">About</h2>
                    <ul class="text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="<?php echo bloginfo('url'); ?>/contact/" class="hover:underline">Contact</a>
                        </li>
                        <li>
                            <a href="<?php echo bloginfo('url'); ?>/FAQs/" class="hover:underline">FAQs</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white">Legal</h2>
                    <ul class="text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="<?php echo bloginfo('url'); ?>/privacy-policy" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="<?php echo bloginfo('url'); ?>/terms-and-conditions/" class="hover:underline">Terms and Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 sm:mx-auto border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400"><?php echo myprefix_get_option( 'footer_copywrite' ) ?> <?php echo date('Y'); ?>.</span>
            <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">    
                <a href="<?php echo myprefix_get_option( 'facebook' ) ?>" class="text-gray-500 hover:text-white">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                        </svg>
                    <span class="sr-only"><?php bloginfo('name') ?> en Facebook</span>
                </a>
                <a href="<?php echo myprefix_get_option( 'google_maps' ) ?>" class="text-gray-500 hover:text-white">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"/></svg>
                    <span class="sr-only"><?php bloginfo('name') ?> en Google Maps</span>
                </a>
            </div>
        </div>
        </div>
    </footer>
    <div class="mobile-bottom-cta sticky bottom-0 bg-white z-[999]">
        <div class="md:hidden grid grid-flow-col justify-stretch" role="group">
            <button onclick="location.href='<?php echo bloginfo('url'); ?>/contact/'" role="link" type="button" class="content-center py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
            <svg class="inline-block w-8 h-8" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z"/></svg><br>
                Contact
            </button>
            <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" type="button" class="content-center py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
            <svg class="inline-block w-8 h-8" aria-hidden="true"  xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"/></svg><br>
                Search
            </button>
            <button onclick="location.href='<?php echo bloginfo('url'); ?>/cart/'" role="link" type="button" class="content-center py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-r-md hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
            <div class="cart-count">
            <svg class="inline-block w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M576 216v16c0 13.255-10.745 24-24 24h-8l-26.113 182.788C514.509 462.435 494.257 480 470.37 480H105.63c-23.887 0-44.139-17.565-47.518-41.212L32 256h-8c-13.255 0-24-10.745-24-24v-16c0-13.255 10.745-24 24-24h67.341l106.78-146.821c10.395-14.292 30.407-17.453 44.701-7.058 14.293 10.395 17.453 30.408 7.058 44.701L170.477 192h235.046L326.12 82.821c-10.395-14.292-7.234-34.306 7.059-44.701 14.291-10.395 34.306-7.235 44.701 7.058L484.659 192H552c13.255 0 24 10.745 24 24zM312 392V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm112 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm-224 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24z"/></svg>
            <?php 
            $item_count = WC()->cart->get_cart_contents_count();
            $args = array( 'item_count' => $item_count );
                                get_template_part( 'partials/icon-cart-indicator', '', $args); ?>
            </div>                
                Cart
            </button>
        </div>
    </div>
    
<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Search:
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    Search by name or key word
                </p>
                <form role="search" method="get" action="<?php echo bloginfo('url'); ?>">
                    <div class="input-group mb-3">
                        <input type="search" name="s" class="form-control" placeholder="Search..." aria-label="Buscar..." aria-describedby="button-search-mobile">
                        <button class="btn btn-outline-secondary" type="submit" id="button-search-mobile"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"/></svg></button>
                    </div>
                </form>                
                
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 rounded-b dark:border-gray-600">
                
            </div>
        </div>
    </div>
</div>

  </div>
  <!-- end MAIN CONTENT -->
  <input type="hidden" value="<?php echo get_template_directory_uri(); ?>/" id="baseURL">
  <?php wp_footer(); ?>
  </body>
</html>