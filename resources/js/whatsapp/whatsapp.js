// to run this: node resources/js/whatsapp_bot/whatsappBot
const Pusher = require('pusher-client');
const venom = require('venom-bot')

venom
.create()
.then((client) => start(client))
.catch((erro) => {
    console.log(erro);
});

function start(client) {
    var pusher = new Pusher('6cbdcfa7c1caf5edb8ba', {
        cluster: 'ap2'
        });
        var channel = pusher.subscribe('msgChannel');
    
        channel.bind('newMsg', function(data) {
            let message = {"phone":data['phone'],"score":data['score'],"name":data['name']}
        
        client
        .sendText(message["phone"]+'@c.us',' سلام '+message['name']+' عزیز \nنمره شما در سامانه لاراموز ثبت شد\nنمره:'+message['score']+'\n\nلاراموز :)')
        .then((result) => {
            console.log('Result: ', result); //return object success
        })
        .catch((erro) => {
            console.error('Error when sending: ', erro); //return object error
        });

    });


}