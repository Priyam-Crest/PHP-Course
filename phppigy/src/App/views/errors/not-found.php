<?php include $this->resolve("partials/_header.php"); ?>

<!-- Start Main Content Area -->
<section class="container mx-auto mt-12 p-4 bg-white shadow-md border border-gray-200 rounded text-center">
  <h1 class="font-black text-9xl text-emerald-900">404</h1>
  <p class="my-6 font-bold text-xl text-emerald-900">
    The page you are looking for was moved, removed renamed or might never
    existed.
  </p>
  <a href="/" class="bg-orange-400 text-white inline-block py-2 px-4 rounded hover:bg-emerald-900 hover:font-bold transition">
    <div class="flex items-center">
      Back To Home
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
        class="w-6 h-6 ml-2">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
      </svg>
    </div>
  </a>
</section>
<!-- End Main Content Area -->

<?php include $this->resolve("partials/_footer.php"); ?>