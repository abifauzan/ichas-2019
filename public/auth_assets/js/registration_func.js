	/*  Wizard */
	jQuery(function ($) {
		"use strict";
        $('form#wrapped').attr('action', '/register');

        $('#password, #password_confirmation').on('keyup', function () {
            if ($('#password').val() !== $('#password_confirmation').val()) {
                $('#password').addClass('error');
                $('#password_confirmation').addClass('error');
                $('.forward').prop('disabled', true);
            } else {
                $('#password').removeClass('error');
                $('#password_confirmation').removeClass('error');
                $('.forward').prop('disabled', false);
            }
        });


		$("#wizard_container").wizard({
			stepsWrapper: "#wrapped",
			submit: ".submit",
			beforeSelect: function (event, state) {
				if ($('input#website').val().length != 0) {
					return false;
				}
				if (!state.isMovingForward)
					return true;
				var inputs = $(this).wizard('state').step.find(':input');
				return !inputs.length || !!inputs.valid();
			}
		}).validate({
			errorPlacement: function (error, element) {
				if (element.is(':radio') || element.is(':checkbox')) {
					error.insertBefore(element.next());
				} else {
					error.insertAfter(element);
				}
			}
		});
		//  progress bar
		$("#progressbar").progressbar();
		$("#wizard_container").wizard({
			afterSelect: function (event, state) {
				$("#progressbar").progressbar("value", state.percentComplete);
                $("#location").text("(" + state.stepsComplete + "/" + state.stepsPossible + ")");
                if(state.stepsComplete == 3) {
                    $('.forward').prop('disabled', false);
                }
			}
		});
		// Validate select
		$('#wrapped').validate({
			ignore: [],
			rules: {
				select: {
					required: true
				}
			},
			errorPlacement: function (error, element) {
				if (element.is('select:hidden')) {
					error.insertAfter(element.next('.nice-select'));
				} else {
					error.insertAfter(element);
				}
			}
		});
	});

	// Summary
	function getVals(formControl, controlType) {
		switch (controlType) {

			case 'input_user_name':
				// Get the value for a input text
				var value = $('#input_name').val();
				$("#user_name").text(value);
				break;

			case 'input_user_email':
				// Get the value for a input text
				var value = $('#input_email').val();
				$("#user_email").text(value);
				break;

			case 'input_user_id_role':
				// Get the value for a select
				var value = $('#input_id_role').val() == '3' ? 'Conference & Seminar' : 'Seminar Only';
                $("#id_role").text(value);
                registrationFeeCalculator();
				break;

            case 'frooom':
				// Get the value for a select
				var value = $('#id_frooom').val() == '1' ? 'Universitas Mercubuana' : 'Other Universities';
				$("#from_from").text(value);
				break;

			case 'nim_student':
				// Get the value for a input text
				var value = $(formControl).val();
				$("#nim_student").text(value);
				break;
		}
    }

    var user_from = document.getElementById('id_frooom');
    user_from.onchange = function() {
        // alert(this.value)
        if(this.value == '1') {
            $('#formNim').removeClass('hidden');
            $("#from_from").text('Universitas Mercubuana');
        } else {
            $('#formNim').addClass('hidden');
            $('#formNim').removeClass('required');
            $("#from_from").text('Universitas Mercubuana');
            $('#field_nim').remove();
        }

        // registrationFeeCalculator();
    }

    // registrationFeeCalculator();

    function registrationFeeCalculator() {
        var today = new Date($('#today').val());
            var early_bird = new Date($('#early_bird').val());

            if($('#input_id_role').val() == '3') {
                // Conference & Seminar
                if(today <= early_bird) {
                    // Get the early bird payment
                    var registration_fee = '600000';
                    var li = document.createElement("li");
                    var label = document.createElement("label");
                    var node = document.createTextNode("Hooray! You got an early bird payment!");
                    label.appendChild(node);
                    li.appendChild(label);

                    var element = document.getElementById("registration_section");
                    var child = document.getElementById("liChild");
                    element.insertBefore(li,child);

                    $('#regis_fee').text(formatRupiah(registration_fee, 'Rp. '));
                    $('#id_payment_type').val('2');
                    // alert('Early Bird is confirmed');

                } else {
                    // alert('Early Bird is denied');
                    if($('#id_frooom').val() == '1') {
                        // UMB Student
                        var registration_fee = '700000';
                        $('#regis_fee').text(formatRupiah(registration_fee, 'Rp. '));
                        $('#id_payment_type').val('5');
                    } else {
                        // Other Universities
                        var registration_fee = '1200000';
                        $('#regis_fee').text(formatRupiah(registration_fee, 'Rp. '));
                        $('#id_payment_type').val('3');
                    }
                }

            } else {
                var registration_fee = '100000';
                $('#regis_fee').text(formatRupiah(registration_fee, 'Rp. '));
                $('#id_payment_type').val('4');
            }
    }

    function formatRupiah(angka, prefix){
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split   		= number_string.split(','),
        sisa     		= split[0].length % 3,
        rupiah     		= split[0].substr(0, sisa),
        ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if(ribuan){
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }




