<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
</head>
<body class="bg-stone-950 text-stone-200">

  <header class="bg-stone-900">
    <nav class="mx-auto max-w-screen-lg flex justify-between py-4">
      <div class="font-bold text-xl tracking-wide">Book Wise</div>
      <ul class="flex space-x-4 font-bold">
        <li><a href="/" class="text-lime-500 tracking-wide">Explorar</a></li>
        <li><a href="/meus-livros.php" class="hover:underline">Meus Livros</a></li>
      </ul>
      <ul>
        <li><a href="/login.php" class="hover:underline">Fazer Login</a></li>
      </ul>
    </nav>
  </header>

  <main class="mx-auto max-w-screen-lg space-y-6">
    <form class="w-full flex space-x-2 mt-6">
      <input 
        type="text" 
        placeholder="Pesquisar..." 
        class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
        name="pesquisar"
      />
      <button type="submit">🔎</button>
    </form>

    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <?php for($i = 0; $i < 5; $i++) { ?>
        <div class="p-2 rounded border-stone-800 bg-stone-900 border-2">
          <div class="flex">
            <div class="w-1/3">Imagem</div>
            <div class="space-y-1">
              <a href="/livro.php?" class="font-semibold hover:underline">Titulo</a>
              <div class="text-xs italic">Autor</div>
              <div class="text-xs italic">⭐⭐⭐⭐⭐(3 Avaliações)</div>
            </div>
          </div>

          <div class="text-sm mt-2">
            Descrição
          </div>
        </div>
      <?php } ?>
    </section>
    
  </main>
  
</body>
</html>