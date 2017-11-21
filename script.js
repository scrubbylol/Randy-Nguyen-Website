var HTML = '<div class="article" onclick=""><div class="box closedDoor"><h2>@@@</h2></div><div class="present"><div class="bauble">?</div></div></div>';
	var dateObj = new Date();
	var monthNo = dateObj.getMonth();
	var dayNo = dateObj.getDate();
	var adventBoxesHTML = '';
	var newHTML = '';
	if(monthNo != 11) {
		dayNo = 25; // so that the rest of the year the doors are always open
	}
for (vv = 1; vv < 25; vv++) {
	newHTML = HTML.replace('@@@',vv);
	if(vv <= dayNo) {
		newHTML = newHTML.replace('closedDoor','openDoor');
		newHTML = newHTML.link('/advent/2016/' + vv);
	}
	adventBoxesHTML += newHTML;
}
document.getElementById("adventBoxes").innerHTML = adventBoxesHTML;