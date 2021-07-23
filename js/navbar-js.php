<script type="text/javascript">
  $(function(){
    var $document = $(document),
        $element  = $('#nav-scroll'),
        $op = 0 - ($(this).scrollTop()/100 * -1);

        window.onscroll = function(){
            var $op = 0 - ($(this).scrollTop()/250 * -1);
            $($element).css('background-color', 'rgba(13,71,161,'+ $op +')');
        }
  });
</script>

<script type="text/javascript">
  
  $(document).ready(function(){
    $('.modal').modal();
  });

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });

  $(".dropdown-trigger").dropdown();

</script>