(function () {
	"use strict";

	var $pickYear = $("#pickYear");

	$("#YearGraduated li a").on("click", function () {
		var reason = $(this).text();
		$pickYear.text(reason);
	});
})();