<div class="mt-[25px] mb-[25px]">
    <h1 class="text-[58px] font-bold uppercase text-[#606060]">User Registration Page</h1>

        <?= form_open('register', ['class' => 'mt-8']); ?>
        <div class="flex flex-col gap-4 mt-6">
            <div class="flex flex-col gap-2">
                <label for="username" class="text-lg font-semibold text-gray-600 uppercase">Username</label>
                <input type="text" name="username" value="<?= set_value('username'); ?>" class="w-full h-10 border rounded px-3 py-1 focus:outline-none focus-visible:ring-white focus:border-gray-500 border-gray-500 text-sm text-gray-500" placeholder="Enter Username">
            </div>

            <div class="flex flex-col gap-2">
                <label for="password" class="text-lg font-semibold text-gray-600 uppercase">Password</label>
                <input type="password" name="password" value="<?= set_value('password'); ?>" class="w-full h-10 border rounded px-3 py-1 focus:outline-none focus-visible:ring-white focus:border-gray-500 border-gray-500 text-sm text-gray-500" placeholder="Enter Password">
                <?= form_error('password', '<span class="text-danger">', '</span>'); ?>
            </div>

            <div class="flex flex-col gap-2">
                <label for="lastname" class="text-lg font-semibold text-gray-600 uppercase">Last Name</label>
                <input type="text" name="lastname" value="<?= set_value('lastname'); ?>" class="w-full h-10 border rounded px-3 py-1 focus:outline-none focus-visible:ring-white focus:border-gray-500 border-gray-500 text-sm text-gray-500" placeholder="Enter Last Name">
                <?= form_error('lastname', '<span class="text-danger">', '</span>'); ?>
            </div>

            <div class="flex flex-col gap-2">
                <label for="firstname" class="text-lg font-semibold text-gray-600 uppercase">First Name</label>
                <input type="text" name="firstname" value="<?= set_value('firstname'); ?>" class="w-full h-10 border rounded px-3 py-1 focus:outline-none focus-visible:ring-white focus:border-gray-500 border-gray-500 text-sm text-gray-500" placeholder="Enter First Name">
                <?= form_error('firstname', '<span class="text-danger">', '</span>'); ?>
            </div>

            <div class="flex flex-col gap-2">
                <label for="address" class="text-lg font-semibold text-gray-600 uppercase">Address</label>
                <input type="text" name="address" value="<?= set_value('address'); ?>" class="w-full h-10 border rounded px-3 py-1 focus:outline-none focus-visible:ring-white focus:border-gray-500 border-gray-500 text-sm text-gray-500" placeholder="House, Street, Village">
                <?= form_error('address', '<span class="text-danger">', '</span>'); ?>
            </div>

            <div class="flex flex-col gap-2">
                <label for="municipality" class="text-lg font-semibold text-gray-600 uppercase">Municipality</label>
                <select name="municipality" class="w-full h-10 border rounded px-3 py-1 focus:outline-none focus-visible:ring-white focus:border-gray-500 border-gray-500 text-sm text-gray-500">
                    <!-- Populate options dynamically from the database -->
                    <?php foreach ($municipalities as $municipality): ?>
                        <option value="<?= $municipality['id']; ?>"><?= $municipality['name']; ?></option>
                    <?php endforeach; ?>
                </select>
                <?= form_error('municipality', '<span class="text-danger">', '</span>'); ?>
            </div>

            <div class="flex flex-col gap-2">
                <label for="barangay" class="text-lg font-semibold text-gray-600 uppercase">Barangay</label>
                <select name="barangay" class="w-full h-10 border rounded px-3 py-1 focus:outline-none focus-visible:ring-white focus:border-gray-500 border-gray-500 text-sm text-gray-500">
                    <!-- Populate options dynamically from the database -->
                    <?php foreach ($barangays as $barangay): ?>
                        <option value="<?= $barangay['id']; ?>"><?= $barangay['name']; ?></option>
                    <?php endforeach; ?>
                </select>
                <?= form_error('barangay', '<span class="text-danger">', '</span>'); ?>
            </div>

            <div class="flex flex-col gap-2">
                <label for="mobile_number" class="text-lg font-semibold text-gray-600 uppercase">Mobile Number</label>
                <input type="text" name="mobile_number" value="<?= set_value('mobile_number'); ?>" class="w-full h-10 border rounded px-3 py-1 focus:outline-none focus-visible:ring-white focus:border-gray-500 border-gray-500 text-sm text-gray-500" placeholder="Enter Mobile Number">
                <?= form_error('mobile_number', '<span class="text-danger">', '</span>'); ?>
            </div>

            <div class="flex flex-col gap-2">
                <label for="age" class="text-lg font-semibold text-gray-600 uppercase">Age</label>
                <input type="text" name="age" value="<?= set_value('age'); ?>" class="w-full h-10 border rounded px-3 py-1 focus:outline-none focus-visible:ring-white focus:border-gray-500 border-gray-500 text-sm text-gray-500" placeholder="Enter Age">
                <?= form_error('age', '<span class="text-danger">', '</span>'); ?>
            </div>

            <div class="flex flex-col gap-2">
                <label for="gender" class="text-lg font-semibold text-gray-600 uppercase">Gender</label>
                <select name="gender" class="w-full h-10 border rounded px-3 py-1 focus:outline-none focus-visible:ring-white focus:border-gray-500 border-gray-500 text-sm text-gray-500">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
                <?= form_error('gender', '<span class="text-danger">', '</span>'); ?>
            </div>

            <div class="flex flex-col gap-2">
                <label for="email" class="text-lg font-semibold text-gray-600 uppercase">Email Address</label>
                <input type="text" name="email" value="<?= set_value('email'); ?>" class="w-full h-10 border rounded px-3 py-1 focus:outline-none focus-visible:ring-white focus:border-gray-500 border-gray-500 text-sm text-gray-500" placeholder="sample@example.com">
                <?= form_error('email', '<span class="text-danger">', '</span>'); ?>
            </div>

            <button type="submit" class="w-100% h-[42px] bg-[#4867A4] text-white uppercase font-bold text-[18px] rounded-[5px] mt-4">Register</button>

        </div>
        <?= form_close(); ?>

</div>