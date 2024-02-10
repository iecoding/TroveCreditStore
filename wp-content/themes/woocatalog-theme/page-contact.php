<?php 
/* 
    Template Name: Contacto
*/ 
get_header();
$salesman = array();
?>

<main class="container mx-auto">
    <?php
        if (isset($_GET["vendedor"])) {
            switch ($_GET["vendedor"]) {
                case 'israel':
                    // code...
                    $salesman['name'] = 'Israel Estrada';
                    $salesman['email'] = 'israel@compilaideas.com';
                    $salesman['phone'] = '4771798916'; 
                    break;

                default:
                    // code...
                    break;
            }
            ?>
            <!-- Container for demo purpose -->
<div class="container my-24 mx-auto md:px-6">
  <!-- Section: Design Block -->
  <section class="mb-32">
    <div class="flex flex-wrap">
      <div class="mb-10 w-full shrink-0 grow-0 basis-auto md:mb-0 md:w-6/12 md:px-3 lg:px-6">
        <h2 class="mb-6 text-3xl font-bold uppercase">Contacto directo:</h2>
                <div class="w-full">
                    <div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-lg space-x-4">
                        <div>
                            <?php 
                                if (isset($_GET["vendedor"])) { ?>
                                        <img class="inline-block h-20 w-20 rounded-full ring-2 ring-white mb-0 float-left mr-2" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="">
                                        <h5><?php echo $salesman['name']; ?></h5>
                                        <ul>
                                            <li><a href="tel:<?php echo $salesman['phone']; ?>"><?php echo $salesman['phone']; ?></a></li>
                                            <li><a href="mailto:<?php echo $salesman['email']; ?>"><?php echo $salesman['email']; ?></a></li>
                                        </ul>
                                        <a target="_blank" href="https://wa.me/521<?php echo $salesman['phone']; ?>"
                                            class="my-3 inline-block w-full rounded bg-blue-900 px-6 pt-2.5 pb-2 text-md font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                                            <svg class="inline-block fill-white ml-2 -mt-1" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg> Mensaje por WhatsApp 
                                        </a>
                                <?php
                                } 
                            ?>
                        </div>
                    </div>            
                </div>
      </div>
      <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:mb-0 md:w-6/12 md:px-3 lg:px-6">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Envía un correo electrónico a <?php echo $salesman['name']; ?></h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Tus datos están protegidos por nuestro aviso de privacidad.</p>
        <form id="main-contact-form">
          <div class="relative mb-6" data-te-input-wrapper-init>
            <input name="name" type="text"
              class="peer block min-h-[auto] w-full rounded  py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
              id="exampleInput90" placeholder="Name" />
            <label
              class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
              for="exampleInput90">Name
            </label>
          </div>
          <div class="relative mb-6" data-te-input-wrapper-init>
            <input name="phone" type="text"
              class="peer block min-h-[auto] w-full rounded py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
              id="exampleInput901" placeholder="Teléfono" />
            <label
              class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
              for="exampleInput901">Teléfono
            </label>
          </div>
          <div class="relative mb-6" data-te-input-wrapper-init>
            <input name="email" type="email"
              class="peer block min-h-[auto] w-full rounded py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
              id="exampleInput91" placeholder="Correo" />
            <label
              class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
              for="exampleInput91">Correo electrónico
            </label>
          </div>
          <div class="relative mb-6" data-te-input-wrapper-init>
            <textarea name="message"
              class="peer block min-h-[auto] w-full rounded py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
              id="exampleFormControlTextarea1" rows="3" placeholder="Your message"></textarea>
            <label for="exampleFormControlTextarea1"
              class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Message</label>
          </div>
          <button type="submit" data-te-ripple-init data-te-ripple-color="light"
            class="mb-6 inline-block w-full rounded bg-blue-900 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
            Enviar correo electrónico
          </button>
          <input type="hidden" name="salesman" value="<?php echo $salesman['name']; ?>">
          <input type="hidden" name="salesman_email" value="<?php echo $salesman['email']; ?>">
        </form>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
</div>
<!-- Container for demo purpose -->
        <?php
        } 
    ?>
    <!-- Container for demo purpose -->
    <div class="container my-24 mx-auto md:px-6">
        <!-- Section: Design Block -->
        <section class="mb-32">
            <h2 class="text-center mb-10 text-3xl font-bold	">Contact Us</h2>
            <div
            class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <div class="flex flex-wrap items-center">
                <div class="block w-full shrink-0 grow-0 basis-auto lg:flex lg:w-6/12 xl:w-4/12">
                <div class="h-[500px] w-full">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.974153302174!2d-101.29030312383345!3d20.95355309035573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842b77563ad6e25b%3A0xdffd19d29977420d!2sFarmacia%20Avicena!5e0!3m2!1ses-419!2smx!4v1697590805891!5m2!1ses-419!2smx"
                    class="left-0 top-0 h-full w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" frameborder="0"
                    allowfullscreen></iframe>
                </div>
                </div>
                <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 xl:w-8/12">
                <div class="flex flex-wrap px-3 pt-12 pb-12 md:pb-0 lg:pt-0">
                    <div class="mb-12 w-full shrink-0 grow-0 basis-auto px-3 md:w-6/12 md:px-6 lg:w-full xl:w-6/12 xl:px-12">
                    <div class="flex items-start">
                        <div class="shrink-0">
                        <div class="inline-block rounded-md bg-primary-100 p-4 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
                            </svg>
                        </div>
                        </div>
                        <div class="ml-6 grow">
                        <p class="mb-2 font-bold dark:text-white">
                            Contacto
                        </p>
                        <p class="text-neutral-500 dark:text-neutral-200">
                            <a href="mailto:avicenafarmacias@gmail.com">iecoding@gmail.com</a>
                        </p>
                        <p class="text-neutral-500 dark:text-neutral-200">
                            <a href="tel:+524731925919">+52 473 192 5919</a>
                        </p>
                        </div>
                    </div>
                    </div>
                    <div
                    class="mb-12 w-full shrink-0 grow-0 basis-auto px-3 md:w-6/12 md:px-6 lg:w-full xl:mb-0 xl:w-6/12 xl:px-12">
                    <div class="align-start flex">
                        <div class="shrink-0">
                        <div class="inline-block rounded-md bg-primary-100 p-4 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                            </svg>
                        </div>
                        </div>
                        <div class="ml-6 grow">
                        <p class="mb-2 font-bold dark:text-white">Ubicación</p>
                        <p class="text-neutral-500 dark:text-neutral-200">
                            <a href="https://maps.app.goo.gl/aTjvoyWH6eVAUBg68">Av. Manantial 1 - Bis<br>
                            Fraccionamiento Manantial C.P. 36259<br>
                            Guanajuato capital, Gto. México.</a>
                        </p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>
        <!-- Section: Design Block -->
    </div>
    <!-- Container for demo purpose -->
</main>
<?php 
get_footer();