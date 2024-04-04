<?php include $this->resolve("partials/_header.php"); ?>

<!-- Start Main Content Area -->
<section class="container mx-auto mt-12 p-4 bg-white shadow-md border border-gray-200 rounded">
  <div class="flex items-center justify-between border-b border-gray-200 pb-4">
    <h4 class="font-medium">Transaction List</h4>
    <div class="flex space-x-4">
      <a href="/transaction"
        class="flex items-center p-2 bg-teal-50 text-xs text-teal-950 hover:bg-teal-500 hover:text-white transition rounded">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="w-4 h-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>

        &nbsp;New Transaction
      </a>
    </div>
  </div>
  <!-- Search Form -->
  <form method="GET" class="mt-4 w-full">
    <div class="flex">
      <input value="<?php echo e((string) $searchTerm); ?>" name="s" type="text"
        class="w-full rounded-l-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-emerald-600 sm:text-sm sm:leading-6"
        placeholder="Enter search term" />
      <button type="submit"
        class="rounded-r-md bg-emerald-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-emerald-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-600">

        <div class="flex">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
            stroke="rgb(250 250 250)" class="w-5 h-5 mr-2">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
          </svg>

          Search
        </div>
      </button>
    </div>
  </form>
  <!-- Transaction List -->
  <div>
    <table class="table-auto min-w-full divide-y divide-gray-300 mt-6">
      <thead class="bg-gray-50">
        <tr class="hidden sm:table-row">
          <th class="p-4 text-left text-sm font-semibold text-gray-900">
            Description
          </th>
          <th class="p-4 text-left text-sm font-semibold text-gray-900">
            <div class="flex items-center">
              Amount
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 ml-2">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
              </svg>
            </div>
          </th>
          <th class="p-4 text-left text-sm font-semibold text-gray-900">
            Receipt(s)
          </th>
          <th class="p-4 text-left text-sm font-semibold text-gray-900">
            <div class="flex items-center">
              Date
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 ml-2">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
              </svg>
            </div>
          </th>
          <th class="flex items-center justify-center p-4 text-left text-sm font-semibold text-gray-900">
            Actions
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 mr-2 ml-2">
              <path fill="#111827"
                d="M403.8 34.4c12-5 25.7-2.2 34.9 6.9l64 64c6 6 9.4 14.1 9.4 22.6s-3.4 16.6-9.4 22.6l-64 64c-9.2 9.2-22.9 11.9-34.9 6.9s-19.8-16.6-19.8-29.6V160H352c-10.1 0-19.6 4.7-25.6 12.8L284 229.3 244 176l31.2-41.6C293.3 110.2 321.8 96 352 96h32V64c0-12.9 7.8-24.6 19.8-29.6zM164 282.7L204 336l-31.2 41.6C154.7 401.8 126.2 416 96 416H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H96c10.1 0 19.6-4.7 25.6-12.8L164 282.7zm274.6 188c-9.2 9.2-22.9 11.9-34.9 6.9s-19.8-16.6-19.8-29.6V416H352c-30.2 0-58.7-14.2-76.8-38.4L121.6 172.8c-6-8.1-15.5-12.8-25.6-12.8H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H96c30.2 0 58.7 14.2 76.8 38.4L326.4 339.2c6 8.1 15.5 12.8 25.6 12.8h32V320c0-12.9 7.8-24.6 19.8-29.6s25.7-2.2 34.9 6.9l64 64c6 6 9.4 14.1 9.4 22.6s-3.4 16.6-9.4 22.6l-64 64z" />
            </svg>
          </th>
        </tr>
      </thead>
      <!-- Transaction Table Body -->
      <tbody class="divide-y divide-gray-200 bg-white">
        <?php foreach($transactions as $transaction) : ?>
        <tr>
          <!-- Description -->
          <td class="p-2 text-sm text-gray-600 w-min sm:p-4">
            <?php echo e($transaction['description']); ?>
          </td>

          <!-- Amount -->
          <td class="p-2 text-sm text-gray-600 sm:p-4">
            <?php echo e($transaction['amount']); ?>
          </td>

          <!-- Receipt List -->
          <td class="p-2 text-sm text-gray-600 hidden sm:inline-block sm:p-4">
            <!-- Loop through receipts -->
            <?php foreach($transaction['receipts'] as $receipt) : ?>
            <!-- Display receipt -->
            <div class="inline-block relative cursor-pointer">
              <!-- Receipt link -->
              <a href="/transaction/<?php echo e($transaction['id']); ?>/receipt/<?php echo e($receipt['id']); ?>">
                <!-- SVG for receipt icon -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="rgb(4 120 87)" class="w-10 h-10">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                </svg>
              </a>
              <!-- Form for delete receipt -->
              <form action="/transaction/<?php echo e($transaction['id']); ?>/receipt/<?php echo e($receipt['id']); ?>"
                method="POST">
                <!-- CSRF token -->
                <?php include $this->resolve("partials/_csrf.php"); ?>
                <!-- Hidden input for HTTP method override -->
                <input type="hidden" name="_METHOD" value="DELETE" />
                <!-- Delete button -->
                <button type="submit" class="absolute -top-1 -right-1">
                  <!-- SVG for delete icon -->
                  <svg xmlns="http://www.w3.org/2000/svg" fill="rgb(239 68 68)" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="white" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </button>
              </form>
            </div>

            <?php endforeach; ?>
          </td>

          <!-- Date -->
          <td class="p-2 text-sm text-gray-600 sm:p-4">
            <?php echo e($transaction['formatted_date']); ?>
          </td>

          <!-- Actions -->
          <td class="p-2 text-sm text-gray-600 flex justify-center space-x-2 hidden sm:flex sm:p-4">
            <!-- View receipt button -->
            <a href="/transaction/<?php echo e($transaction['id']); ?>/receipt"
              class="p-2 bg-amber-50 text-xs text-amber-900 hover:bg-amber-500 hover:text-white transition rounded" title="Upload File">
              <!-- SVG for view receipt icon -->
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15M9 12l3 3m0 0l3-3m-3 3V2.25" />
              </svg>
            </a>
            <!-- Edit transaction button -->
            <a href="/transaction/<?php echo e($transaction['id']); ?>"
              class="p-2 bg-emerald-50 text-xs text-emerald-900 hover:bg-emerald-500 hover:text-white transition rounded" title="Edit Transaction">
              <!-- SVG for edit transaction icon -->
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
              </svg>
            </a>
            <!-- Delete transaction form -->
            <form method="POST" action="/transaction/<?php echo e($transaction['id']); ?>" title="Delete Transaction" >
              <!-- Hidden input for HTTP method override -->
              <input type="hidden" name="_METHOD" value="DELETE" />
              <!-- CSRF token -->
              <?php include $this->resolve("partials/_csrf.php"); ?>
              <!-- Delete button -->
              <button type="submit"
                class="p-2 bg-red-50 text-xs text-red-900 hover:bg-red-500 hover:text-white transition rounded">
                <!-- SVG for delete transaction icon -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>
              </button>
            </form>
          </td>

          <!-- below small window action buttons -->
          <td class="relative block p-2 flex justify-center space-x-2 sm:p-4 sm:hidden">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 menu-button cursor-pointer hover:rounded-md hover:border-2 outline-emerald-900 transition">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
              </svg>
            </div>

            <div class="absolute right-14 -top-6 z-10 mt-1 w-40 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden menu-dropdown">
              <div class="py-1" role="none">
                <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->

                <!-- Upload Receipt -->
                <a href="/transaction/<?php echo e($transaction['id']); ?>/receipt"
                  class="text-gray-700 block px-4 py-2 text-xs hover:bg-teal-500 hover:text-white transition"
                  role="menuitem" tabindex="-1" id="menu-item-1">
                  Upload Receipt
                </a>

                <!-- Show Receipt -->
                <?php foreach($transaction['receipts'] as $receipt) : ?>
                <a href="/transaction/<?php echo e($transaction['id']); ?>/receipt/<?php echo e($receipt['id']); ?>"
                  class="text-gray-700 block px-4 py-2 text-xs hover:bg-teal-500 hover:text-white transition"
                  role="menuitem" tabindex="-1">
                  Show Receipt
                </a>
                <?php endforeach; ?>


                <!-- Update Transaction -->
                <a href="/transaction/<?php echo e($transaction['id']); ?>"
                  class="text-gray-700 block px-4 py-2 text-xs hover:bg-teal-500 hover:text-white transition"
                  role="menuitem" tabindex="-1" id="menu-item-2">
                  Edit Transaction
                </a>

                <!-- Delete Transaction -->
                <form method="POST" action="/transaction/<?php echo e($transaction['id']); ?>" class="hover:bg-teal-500 transition">
                  <input type="hidden" name="_METHOD" value="DELETE" />
                  <!-- CSRF token -->
                  <?php include $this->resolve("partials/_csrf.php"); ?>
                  <button type="submit"
                    class="text-gray-700 block px-4 py-2 w-full text-left text-xs hover:text-white"
                    role="menuitem" tabindex="-1" id="menu-item-3">
                    Delete Transaction
                  </button>
                </form>
              </div>
            </div>
          </td>

        </tr>
        <?php endforeach; ?>
      </tbody>

    </table>
  </div>
  <nav class="flex items-center justify-between border-t border-gray-200 px-4 sm:px-0 mt-6">
    <!-- Previous Page Link -->
    <div class="-mt-px flex w-0 flex-1">
      <?php if($currentPage > 1) : ?>
      <a href="/?<?php echo e($previousPageQuery); ?>"
        class="inline-flex items-center border-t-2 border-transparent pr-1 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
        <svg class="mr-3 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd"
            d="M18 10a.75.75 0 01-.75.75H4.66l2.1 1.95a.75.75 0 11-1.02 1.1l-3.5-3.25a.75.75 0 010-1.1l3.5-3.25a.75.75 0 111.02 1.1l-2.1 1.95h12.59A.75.75 0 0118 10z"
            clip-rule="evenodd" />
        </svg>
        Previous
      </a>
      <?php endif; ?>
    </div>
    <!-- Pages Link -->
    <div class="hidden md:-mt-px md:flex">
      <?php foreach($pageLinks as $pageNum => $query) : ?>
      <a href="/?<?php echo e($query); ?>"
        class="<?php echo $pageNum + 1 === $currentPage ? "border-emerald-500 text-emerald-600" : "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" ; ?>inline-flex items-center border-t-2 px-4 pt-4 text-sm font-medium">
        <?php echo $pageNum + 1;  ?>
      </a>
      <?php endforeach; ?>
      <!-- Current: "border-emerald-500 text-emerald-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
    </div>
    <!-- Next Page Link -->
    <div class="-mt-px flex w-0 flex-1 justify-end">
      <?php if($currentPage < $lastPage) : ?>
      <a href="/?<?php echo $nextPageQuery; ?>"
        class="inline-flex items-center border-t-2 border-transparent pl-1 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
        Next
        <svg class="ml-3 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd"
            d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z"
            clip-rule="evenodd" />
        </svg>
      </a>
      <?php endif; ?>
    </div>
  </nav>
</section>
<!-- End Main Content Area -->

<script>
document.addEventListener('DOMContentLoaded', function() {
  const menuButtons = document.querySelectorAll('.menu-button');
  const menuDropdowns = document.querySelectorAll('.menu-dropdown');

  menuButtons.forEach(function(menuButton, index) {
    menuButton.addEventListener('click', function() {
      const clickedDropdown = menuDropdowns[index];

      // Toggle the visibility of the clicked dropdown
      clickedDropdown.classList.toggle('hidden');

      // Hide all other dropdowns
      menuDropdowns.forEach(function(dropdown, i) {
        if (i !== index && !dropdown.classList.contains('hidden')) {
          dropdown.classList.add('hidden');
        }
      });
    });
  });
});
</script>




<?php include $this->resolve("partials/_footer.php"); ?>