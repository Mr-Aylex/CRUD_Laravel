<html>
<link href="/css/bootstrap.min.css" rel="stylesheet">
<a href="new_perso">Nouveau personnage</a>
@foreach ($users as $user)


    <div>
        <h4>
            {{ $user->nom }}
            {{ $user->prenom }}
        </h4>

        
        <form action="" method="POST">
        <input type="hidden" name="id" value="{{$user->id}}">
            <button>Modifier</button>
        </form>
        <form action="suppression" method="POST">
        <input type="hidden" name="id" value="{{$user->id}}">
            <button>Supprimer</button>
        </form>
        
    </div>

@endforeach
<script src="/js/jquery.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
</html>