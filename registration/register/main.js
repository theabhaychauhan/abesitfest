var myFirebaseRef = new Firebase("https://abesitfest.firebaseio.com/");
firebase.initializeApp(config);
var messagesRef = firebase.database().ref('messages');
document.getElementById('festkaform').addEventListener('submit', submitForm);
function submitForm(e){
  e.preventDefault();
    
  var college = getInputVal('college');
  var city = getInputVal('city');
  var fname = getInputVal('fname');
  var mobile = getInputVal('mobile');
  var email = getInputVal('email');
  var checked_list = getInputVal('checked_list');
  var team = getInputVal('team');
  var pname = getInputVal('pname');
  var pphone = getInputVal('pphone');
  var pemail = getInputVal('pemail');
  var event = getInputVal('event');
  // Save message
  saveMessage(college,city,fname,mobile,email,checked_list,team,pname,pphone,pemail,event);

  document.querySelector('.alert').style.display = 'block';
  setTimeout(function(){
    document.querySelector('.alert').style.display = 'none';
  },3000);

  document.getElementById('festkaform').reset();
}

function getInputVal(id){
  return document.getElementById(id).value;
}

function saveMessage(college,city,fname,mobile,email,checked_list,team,pname,pphone,pemail,event){
  var newMessageRef = messagesRef.push();
  newMessageRef.set({
    college:college,
      city:city,
      fname:fname,
      mobile:mobile,
      email:email,
      checked_list:checked_list,
      team:team,
      pname:pname,
      pphone:pphone,
      pemail:pemail,
      event:event
  });
}