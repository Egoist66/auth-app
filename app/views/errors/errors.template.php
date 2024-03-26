<style>
    .container {
        padding: 0 25px;
        display: flex;
        justify-content: center;
        flex-direction: column;
        height: 100%;
        align-items: center;
    }

    a {
        color: dodgerblue;
    }

  

    .error-nav {
        display: flex;
        gap: 20px;
        
    }

    p {
        margin: 0 !important;
        color: black;
    }

    code {
        font-size: 22px !important;
    }

    body,html {
        margin: 0;
        padding: 0;
        background-color: ghostwhite;
        font-size: 22px;
        font-family: Arial;
        box-sizing: border-box;
    }
</style>

<script>
    document.title = 'Error';
</script>

<div class="container">
    <p style="text-align:center; margin-bottom: 30px !important;"><?= $content ?></p>

   <div class="error-nav">
        <p>
            <a href="/">Go Home</a>
        </p>

        <p>
            <a href=<?= $_SERVER['HTTP_REFERER'] ?>>Go back</a>
        </p>
   </div>
</div>