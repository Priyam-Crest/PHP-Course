<?php include $this->resolve("partials/_header.php"); ?>

<!-- Start Main Content Area -->
<section class="container mx-auto mt-12 p-4 bg-white tracking-wider shadow-md border border-gray-200 rounded">
  <!-- Page Title -->
  <h3 class="relative inset-y-12 start-2 z-10 text-3xl text-white font-black font-sans">About US</h3>

  <div class="block mb-4 lg:flex sm:mb-2">
    <img class="relative object-contain w-96 h-46 shadow-md rounded-lg brightness-75" src="/assets/img/about-page.jpg"
      alt="about-us">
    <!-- Description -->

    <p class="my-4 text-lg text-gray-600 sm:px-4 ">
      Welcome to <strong class="text-emerald-900">PHPiggy</strong>. Our system allows you to easily manage your
      transactions, Including inserting Transaction details such as Description, Amount, Receipts with Date. You can perform various
      actions such as Edit Transactions, Delete Transactions, and Upload Receipts for specific Transactions.
    </p>
  </div>

  <hr />


  <!-- Features -->
  <div class="mt-6">
    <h4 class="font-bold font-sans text-gray-900">Key Features :</h4>
    <ul class="list-none pl-6 mt-2 leading-7 md:leading-10 text-gray-600">
      <div class="flex items-center">
        <i class="fa-regular fa-circle-check mr-2 self-start pt-2 sm:pt-3" style="color: #064e3b;"></i>
        <li><span class="text-gray-800 font-semibold">Create New Transaction Details :</span> Add Description, Amount, Date, etc.</li>
      </div>

      <div class="flex items-center">
        <i class="fa-regular fa-circle-check mr-2 self-start pt-2 sm:pt-3" style="color: #064e3b;"></i>
        <li><span class="text-gray-800 font-semibold">Edit Transactions :</span> Modify Transaction details as needed.</li>
      </div>

      <div class="flex items-center">
        <i class="fa-regular fa-circle-check mr-2 self-start pt-2 sm:pt-3" style="color: #064e3b;"></i>
        <li><span class="text-gray-800 font-semibold">Delete Transactions :</span> Remove Unwanted Transactions from the system.</li>
      </div>

      <div class="flex items-center">
        <i class="fa-regular fa-circle-check mr-2 self-start pt-2 sm:pt-3" style="color: #064e3b;"></i>
        <li><span class="text-gray-800 font-semibold">Search Transaction :</span> Filterout Transaction details by Searching.</li>
      </div>
      
      <div class="flex items-center">
        <i class="fa-regular fa-circle-check mr-2 self-start pt-2 sm:pt-3" style="color: #064e3b;"></i>
        <li><span class="text-gray-800 font-semibold">Upload Receipts :</span> Attach receipts for better record-keeping.</li>
      </div>
    </ul>
  </div>

</section>
<!-- End Main Content Area -->



<?php include $this->resolve("partials/_footer.php"); ?>