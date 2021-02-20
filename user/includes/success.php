<?php if(!empty($_SESSION['success_msg'])): ?>
<div class="bg-green-200 rounded-lg p-3 border-l-4 border-green-400 font-normal flex">
  <div class="w-6 my-auto">
    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 468.293 468.293" style="enable-background:new 0 0 468.293 468.293;" xml:space="preserve">
      <circle style="fill:#25a884;" cx="234.146" cy="234.146" r="234.146"/>
      <polygon style="fill:#EBF0F3;" points="357.52,110.145 191.995,275.67 110.773,194.451 69.534,235.684 191.995,358.148 398.759,151.378 "/>
    </svg>
  </div>
  <div class="ml-2">
    <?php echo $_SESSION['success_msg']; ?>
  </div>
</div>
<?php 
endif;
unset($_SESSION['success_msg']);
?>