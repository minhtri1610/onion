<button class="pagetop170">
    <i class="fontello-1-arrow1-w0-up"></i>
    <span class="pagetop170-text">PAGE TOP</span>
</button>
<!-- footer01 -->
<!--==================================================-->

<footer class="footer01">
    <div class="container">
        <div class="footer01-main">
            <p class="footer01-text-1">copyright 息 Hanamigawa Swimming Club. All Rights Reserved.</p>
        </div>
    </div>
</footer><!-- .footer01 -->

<script>
    //Biến global url ajax lưu tại đây:
    var url_login = 'https:' + "<?php echo base_url().'admin/login'?>";
    var url_index = 'https:' + "<?php echo base_url().'admin/auth'?>"; 
    var url_logout = 'https:' + "<?php echo base_url().'admin/logout'?>"; 
    var url_top = 'https:' + "<?php echo base_url().'admin'?>";
    //end global
    $(document).ready(function(){
        
        if($('#content').height() > 0){
            $('footer').css('position','relative');
            let h_header = $('header').height();
            let h_footer = $('footer').height();
            let h_content = $(window).height() - (h_header + h_footer + 100);
            $('#content').css('min-height', h_content);
        }
    })
</script>

<?php
    $segment = $this->uri->segment(1);
    $arr_name_file_js = explode ("_", $js_view); 
    $name_file_js = isset($arr_name_file_js[0]) ? $arr_name_file_js[0] : '';
    $segment = ($segment == '') ? 'admin' : $segment;
    
    if(file_exists(FCPATH."js/".$segment."/".$name_file_js.".js"))
    {
    
?>
      <script src="<?php echo base_url() ?><?php echo"js/".$segment."/".$name_file_js.".js"; ?>"></script>
<?php
    }
?>

</body>
</html>