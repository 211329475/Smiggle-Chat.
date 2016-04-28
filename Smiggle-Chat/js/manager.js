// JavaScript Document

$(document).ready(function() 
{
	"use strict";
	$("#overlay").click(function()
	{ 
		toggleOverlay();
	});
	
	$("#clickLink").click(function()
	{ 
		toggleOverlay();
		//RegisterToggleOverlay();
	});
	
	$("#registerOverlay").click(function()
	{ 
		RegisterToggleOverlay();
	});
	
	$("#RegisterclickLink").click(function()
	{ 
		RegisterToggleOverlay();
		//toggleOverlay();
	});
	
	
}); 

function toggleOverlay()
{
	
	"use strict";
	var overlay = document.getElementById('overlay');
	var specialBox = document.getElementById('specialBox');
	overlay.style.opacity = 0.8;
	
	var registerOverlay = document.getElementById('registerOverlay');
	var registerSpecialBox = document.getElementById('registerSpecialBox');
	registerOverlay.style.opacity = 0.8;
	if(registerOverlay.style.display === "block")
	{
		registerOverlay.style.display = "none";
		registerSpecialBox.style.display = "none";
	}
	
	if(overlay.style.display === "block")
	{
		overlay.style.display = "none";
		specialBox.style.display = "none";
	} else 
	{
		overlay.style.display = "block";
		specialBox.style.display = "block";
	}
}

function RegisterToggleOverlay()
{
	"use strict";
	var registerOverlay = document.getElementById('registerOverlay');
	var registerSpecialBox = document.getElementById('registerSpecialBox');
	registerOverlay.style.opacity = 0.8;
	
	var overlay = document.getElementById('overlay');
	var specialBox = document.getElementById('specialBox');
	overlay.style.opacity = 0.8;
	if(overlay.style.display === "block")
	{
		overlay.style.display = "none";
		specialBox.style.display = "none";
	}
	
	if(registerOverlay.style.display === "block")
	{
		registerOverlay.style.display = "none";
		registerSpecialBox.style.display = "none";
	} else 
	{
		registerOverlay.style.display = "block";
		registerSpecialBox.style.display = "block";
	}
}