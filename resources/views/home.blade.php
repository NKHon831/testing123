<html>
    <head>
        <title>Home</title>
    </head>

    <body>
        <h1>Welcome back! {{auth()->user()->name}}</h1>
        <x-top-navigation-bar/>

        <div class="modal" id="user-preferecence-modal"></div>
    </body>
</html>

<!-- Hiddle modal -->
 <x-food/>
 <x-transport/>
 <x-accomodation/>

<script>
    function changeModalContent(contentType){
        const modal = document.getElementById('user-preferecence-modal');
        let contentHtml = '';

        switch (contentType) {
            case 'FOOD' : {
                contentHtml =  document.getElementById('food-modal').innerHTML;
                break;
            } 
            case 'TRANSPORT' : {
                contentHtml =  document.getElementById('transport-modal').innerHTML;
                break;
            } 
            case 'ACCOMODATION' : {
                contentHtml =  document.getElementById('accomodation-modal').innerHTML;
                break;
            } 
            default : {
                let contentHtml = '<div>No modal is found<div/>';
            }
        }

        modal.innerHTML = contentHtml;
    }
</script>