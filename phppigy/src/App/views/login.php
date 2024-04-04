<?php include $this->resolve("partials/_header.php"); ?>

<section class="max-w-2xl mx-auto mt-12 p-4 bg-white shadow-md border border-gray-200 rounded">
  <form method="POST" class="grid grid-cols-1 gap-6">
    <?php include $this->resolve('partials/_csrf.php'); ?>

    <label class="block">
      <span class="text-gray-700">Email address</span>
      <input value="<?php echo e($oldFormData['email'] ?? ''); ?>" name="email" type="email"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-300 focus:ring focus:ring-emerald-200 focus:ring-opacity-50"
        placeholder="john@example.com" />
      <?php if(array_key_exists('email', $errors)) : ?>
      <div class="bg-gray-100 mt-2 p-2 text-red-500">
        <?php echo e($errors['email'][0]); ?>

      </div>
      <?php endif; ?>
    </label>
    <label class="block relative">
      <span class="text-gray-700">Password</span>
      <input name="password" id="password" type="password"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-300 focus:ring focus:ring-emerald-200 focus:ring-opacity-50"
        placeholder="" />
      <div id="togglePassword" class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer <?php echo isset($errors['password']) ? '-top-5' : 'top-7'; ?>">
        <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
          stroke="currentColor" class="w-6 h-6 stroke-gray-400">
          <path id="eyeSlashPath" stroke-linecap="round" stroke-linejoin="round"
            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
          <path id="eyePath" stroke-linecap="round" stroke-linejoin="round"
            d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
        </svg>
      </div>
      <?php if(array_key_exists('password', $errors)) : ?>
      <div class="bg-gray-100 mt-2 p-2 text-red-500 relative">
        <?php echo e($errors['password'][0]); ?>
      </div>
      <?php endif; ?>
    </label>
    <button type="submit" class="block w-full py-2 bg-emerald-600 text-white rounded">
      Submit
    </button>
  </form>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const passwordInput = document.getElementById('password');
  const eyeIcon = document.getElementById('eyeIcon');
  const eyePath = document.getElementById('eyePath');
  const eyeSlashPath = document.getElementById('eyeSlashPath');
  const togglePassword = document.getElementById('togglePassword');

  togglePassword.addEventListener('click', function() {
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      eyePath.style.display = 'none';
      eyeSlashPath.style.display = 'block';
    } else {
      passwordInput.type = 'password';
      eyePath.style.display = 'block';
      eyeSlashPath.style.display = 'none';
    }
  });
});
</script>

<?php include $this->resolve("partials/_footer.php"); ?>