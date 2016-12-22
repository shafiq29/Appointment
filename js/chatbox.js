	var old=0;
	var arr=[];
	var prev='#box';
function open_chat(pos,name){
	if(arr.length==0){
		old=0;
	}
	if(arr.indexOf(pos.toString())==-1){
		posi={'pos': pos, 'name':name};
		
		$.post('create_box.php', posi , function(data) {
			$(prev).append($(data));
			$('.'+pos).css('left',  old+'%');
			//prev='.'+pos;
		});
	
		old=(old+100)+3;
		
		arr.push(pos);
	}
}