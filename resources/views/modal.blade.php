<!DOCTYPE html>
<html>
<head>
    <title>modal example</title>
</head>
<style>
    .overlay{
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        visibility: hidden;
        background: rgba(0,0,0, 0.5);
    }
    .overlay:target{
        visibility: visible;
    }
    .overlay .cancel{
        position: absolute;
        width: 100%;
        height: 100%;
    }
    .modal{
        position: relative;
        width: 600px;
        max-width: 80%;
        background: white;
        border-radius: 8px;
        padding: 1em 2em;

    }
    .modal .close {
        position: absolute;
        top: 15px;
        right: 15px;
        color: gray;
        text-decoration: none;
    }

</style>
<body>
<a href="#join-modal">Join</a>


<div id="join-modal" class="overlay">
    <a href="" class="cancel"></a>
    <div class="modal">
        <h1>pick a plan</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto delectus eum excepturi in inventore ipsum laudantium molestias nostrum, odio praesentium quaerat quas qui repellendus rerum sed tempora voluptas, voluptatum.
        </p>
        <a href="" class="close">&times;</a>

    </div>
</div>

</body>
</html>
