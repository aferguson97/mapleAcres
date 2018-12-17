$(function()
{
	$("#iconNav").click(function()
	{
		$("#mobileNav").animate({left: "0px"});
	});

	$("#closeMenu").click(function()
	{
		$("#mobileNav").animate({left: "-100vw"});
	});
});