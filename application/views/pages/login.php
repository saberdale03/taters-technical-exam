<div>
    <h1 class="text-[58px] font-bold uppercase text-[#606060]">User Login Page</h1>

    <?= form_open('login'); ?>
    <div class="flex flex-col gap-4 mt-[30px]">
        <div class="flex flex-col gap-2">
            <span class="text-[18px] font-semibold text-[#606060] uppercase">username</span>
            <input type="text" value="<?= set_value('username'); ?>" class="w-100% h-[42px] border rounded px-2 pl-3 py-1 focus:outline-none focus-visible:ring-white focus:border-gray-500 border-gray-500 text-sm text-gray-500">
        </div>
        <div class="flex flex-col gap-2">
            <span class="text-[18px] font-semibold text-[#606060] uppercase">password</span>
            <input type="password" value="<?= set_value('password'); ?>" class="w-100% h-[42px] border rounded px-2 pl-3 py-1 focus:outline-none focus-visible:ring-white focus:border-gray-500 border-gray-500 text-sm text-gray-500">
        </div>
        
        <button type="submit" class="w-100% h-[42px] bg-[#0E4572] text-white uppercase font-bold text-[18px] rounded-[5px] mt-4">Login</button>
    
    </div>
    <?= form_close(); ?>
    
</div>