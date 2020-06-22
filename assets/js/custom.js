function checkPasswordMatch() {
	var password = $("#txtNewPassword").val();
	var confirmPassword = $("#txtConfirmPassword").val();

	if (password != confirmPassword) {
		$("#txtConfirmPassword").removeClass("border-success");
		$("#txtConfirmPassword").addClass("border-danger");
		$("#divCheckPasswordMatch").html("<i><small class='text-danger'>Password Harus Sama</small></i>");
		$('#tbhUser').prop('disabled', true);
	} else {
		$("#txtConfirmPassword").removeClass("border-danger");
		$("#txtConfirmPassword").addClass("border-success");
		$("#divCheckPasswordMatch").html("<i><small class='text-success'>Password Cocok</small></i>");
		$('#tbhUser').prop('disabled', false);
	}
}
$("#txtConfirmPassword").keyup(checkPasswordMatch);
