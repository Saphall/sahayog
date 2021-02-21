<div class="w-full sm:w-48 pt-3 bg-yellow-50 sm:min-h-screen border border-r border-gray-300">
    <div class="text-center text-4xl mb-3 font-semibold">
        <a href="index">SAHAYOG</a>
    </div>
    <div class="text-center">
        <img class="mx-auto w-32 h-32 object-cover shadow rounded-full mb-2" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8OXx8cG9ydHJhaXR8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" />
        <span class="font-semibold text-xl"><?php echo strtoupper($_SESSION['username']); ?></span>
    </div>
    <div class="flex flex-col mt-10">
        <a href="../" class="bg-gray-50 hover:bg-gray-200 border-t border-b p-2"  target="_blank"> Home </a>
        <?php if($_SESSION['type'] == 'user'): ?>
        <a href="profile" class="bg-gray-50 hover:bg-gray-200 border-t border-b p-2"> Profile </a>
        <?php endif; ?>
        <?php if($_SESSION['type'] !== 'user'): ?>
        <a href="user" class="bg-gray-50 hover:bg-gray-200 border-b p-2"> Users </a>
    	<?php endif; ?>
    	<?php if($_SESSION['type'] == 'superadmin'): ?>
        <a href="admin" class="bg-gray-50 hover:bg-gray-200 border-b p-2"> Admin </a>
    	<?php endif; ?>
        <a href="report" class="bg-gray-50 hover:bg-gray-200 border-b p-2"> Report </a>
        <a href="../logout" class="bg-red-200 hover:bg-red-300 border-b p-2"> Logout </a>
    </div>
</div>