<?php
include('Header.php')
?>
<div class="row">
									<div class="col-sm-6">
										
											<p>
											     <button class="btn btn-success" id="bootbox-options">More Options</button>
											</p>
										</div>
<script src="assets/js/jquery-2.1.4.min.js"></script>


<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-ui.custom.min.js"></script>
<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="assets/js/bootbox.js"></script>
<script src="assets/js/jquery.easypiechart.min.js"></script>
<script src="assets/js/jquery.gritter.min.js"></script>
<script src="assets/js/spin.js"></script>
<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>
<script type="text/javascript">
    jQuery(function($) {
        
             $("#bootbox-options").on(ace.click_event, function($q) {
            bootbox.dialog({
                message: "<span class='bigger-110'>I am a custom dialog with smaller buttons</span>",
                buttons:
                {
                    "success" :
                     {
                        "label" : "<i class='ace-icon fa fa-check'></i> Success!",
                        "className" : "btn-sm btn-success",
                        "callback": function() {
                            //Example.show("great success");
                        }
                    },
                    "danger" :
                    {
                        "label" : "Danger!",
                        "className" : "btn-sm btn-danger",
                        "callback": function() {
                            //Example.show("uh oh, look out!");
                        }
                    }, 
                    
                }
            });
        });
    
    
    
        $('#spinner-opts small').css({display:'inline-block', width:'60px'})
    
        var slide_styles = ['', 'green','red'];
        var ii = 0;
        $("#spinner-opts input[type=text]").each(function() {
            var $this = $(this);
            $this.hide().after('<span />');
            $this.next().addClass('ui-slider-small').
            addClass("inline ui-slider-"+slide_styles[ii++ % slide_styles.length]).
            css('width','125px').slider({
                value:parseInt($this.val()),
                range: "min",
                animate:true,
                min: parseInt($this.attr('data-min')),
                max: parseInt($this.attr('data-max')),
                step: parseFloat($this.attr('data-step')) || 1,
                slide: function( event, ui ) {
                    $this.val(ui.value);
                    spinner_update();
                }
            });
        });
    
    
    
        //CSS3 spinner
        $.fn.spin = function(opts) {
            this.each(function() {
              var $this = $(this),
                  data = $this.data();
    
              if (data.spinner) {
                data.spinner.stop();
                delete data.spinner;
              }
              if (opts !== false) {
                data.spinner = new Spinner($.extend({color: $this.css('color')}, opts)).spin(this);
              }
            });
            return this;
        };
    
        function spinner_update() {
            var opts = {};
            $('#spinner-opts input[type=text]').each(function() {
                opts[this.name] = parseFloat(this.value);
            });
            opts['left'] = 'auto';
            $('#spinner-preview').spin(opts);
        }
    
    
    
        $('#id-pills-stacked').removeAttr('checked').on('click', function(){
            $('.nav-pills').toggleClass('nav-stacked');
        });
    
        
        
        
        
        
        ///////////
        $(document).one('ajaxloadstart.page', function(e) {
            $.gritter.removeAll();
            $('.modal').modal('hide');
        });
    
    });
</script>
<?php
   include('footer.php')
?>
