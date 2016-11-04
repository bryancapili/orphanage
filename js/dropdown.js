(function () {
	"use strict";

	var $pickCourse = $("#pickCourse");

	$("#Course li a").on("click", function () {
		var reason = $(this).text();
		$pickCourse.text(reason);
	});
})();