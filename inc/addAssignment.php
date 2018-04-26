<?php
$page['title'] = "Student Process";
include_once (realpath('templates/stapped/header.php'));
include_once (realpath('templates/stapped/navbar.php'));
?>
<body>
    <?php
		include_once (realpath('templates/stapped/style.php'));
	?>
    <br><br><br>
    <script>
        (function ($) {
    $(function () {

        var addFormGroup = function (event) {
            event.preventDefault();

            var $formGroup = $(this).closest('.form-group');
            var $multipleFormGroup = $formGroup.closest('.multiple-form-group');
            var $formGroupClone = $formGroup.clone();

            $(this)
                .toggleClass('btn-default btn-add btn-danger btn-remove')
                .html('–');

            $formGroupClone.find('input').val('');
            $formGroupClone.insertAfter($formGroup);

            var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
            if ($multipleFormGroup.data('max') <= countFormGroup($multipleFormGroup)) {
                $lastFormGroupLast.find('.btn-add').attr('disabled', true);
            }
        };

        var removeFormGroup = function (event) {
            event.preventDefault();

            var $formGroup = $(this).closest('.form-group');
            var $multipleFormGroup = $formGroup.closest('.multiple-form-group');

            var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
            if ($multipleFormGroup.data('max') >= countFormGroup($multipleFormGroup)) {
                $lastFormGroupLast.find('.btn-add').attr('disabled', false);
            }

            $formGroup.remove();
        };

        var countFormGroup = function ($form) {
            return $form.find('.form-group').length;
        };

        $(document).on('click', '.btn-add', addFormGroup);
        $(document).on('click', '.btn-remove', removeFormGroup);

    });
    })(jQuery);
    </script>
    <div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
            <div class="jumbotron">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Assignment name</label>
                        <input type="Name" class="form-control" id="exampleAssignmentName">
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea">Descirption</label>
                        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Additional file</label>
                        <input type="file" class="form-control-file" id="exampleInputFile" >
                    </div>
                    <br>
                    <div class="form-group multiple-form-group" data-max=3>
				        <label>add sub assignment</label>
                    </div>
			        <div class="form-group input-group">
				    <input type="text" name="multiple[]" class="form-control">
					    <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-add">+
					        </button>
                        </span>
			        </div>
                    <br>
                    <button type="button" class="btn btn-primary float-right">
			        	Save chage
			        </button>
		        	<a href="teacherProcess.php">
                        <button type="button" class="btn float-right">
		                	cancel
				        </button> 
                    </a>
                </form>
                
            </div>
        </div>
        <div class="col-md-1">
        </div>
    </div>
</body>