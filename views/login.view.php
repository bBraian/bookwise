<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Login ou Cadastro - Book Wise</title>
</head>
<body class="bg-stone-950 text-stone-200">
  <?php
    $action = $_GET['action'] ?? 'login'; // Define o que mostrar, login ou cadastro
    $messageType = 'success';
  ?>

  <main class="mx-auto max-w-screen-md py-12" style="min-height: calc(100vh - 64px);">
    <?php if ($action === 'login') : ?>
      <section class="space-y-6 text-center">
        <h1 class="text-3xl font-bold text-lime-500">Entrar</h1>
        <form method="POST" class="space-y-4">
          <?php if(strlen($mensagem) > 0) : ?>
            <div class="mb-6 p-4 rounded-lg text-center 
              <?php echo $messageType === 'success' ? 'bg-green-900 text-green-400' : ($messageType === 'error' ? 'bg-red-500 text-stone-200' : 'bg-stone-700 text-stone-200'); ?>">
              <?php echo htmlspecialchars($mensagem); ?>
            </div>
          <?php endif; ?>
          <div>
            <label for="email" class="block text-left text-stone-400">E-mail</label>
            <input type="email" id="email" name="email" required class="w-full p-3 rounded bg-stone-800 text-stone-200">
          </div>
          <div>
            <label for="password" class="block text-left text-stone-400">Senha</label>
            <input type="password" id="password" name="password" required class="w-full p-3 rounded bg-stone-800 text-stone-200">
          </div>
          <button type="submit" class="w-full bg-lime-500 text-stone-950 font-bold py-3 rounded-lg hover:bg-lime-600 transition">Entrar</button>
        </form>
        <p class="text-stone-400">Ainda não tem uma conta? <a href="?action=register" class="text-lime-500 hover:underline">Cadastre-se</a></p>
      </section>
    <?php elseif ($action === 'register') : ?>
      <section class="space-y-6 text-center">
        <h1 class="text-3xl font-bold text-lime-500">Cadastrar</h1>
        <form method="POST" action="/registrar" class="space-y-4">
          <div>
            <label for="name" class="block text-left text-stone-400">Nome</label>
            <input type="text" id="name" name="name" required class="w-full p-3 rounded bg-stone-800 text-stone-200">
          </div>
          <div>
            <label for="email" class="block text-left text-stone-400">E-mail</label>
            <input type="email" id="email" name="email" required class="w-full p-3 rounded bg-stone-800 text-stone-200">
          </div>
          <div>
            <label for="password" class="block text-left text-stone-400">Senha</label>
            <input type="password" id="password" name="password" required class="w-full p-3 rounded bg-stone-800 text-stone-200">
          </div>
          <button type="submit" class="w-full bg-lime-500 text-stone-950 font-bold py-3 rounded-lg hover:bg-lime-600 transition">Cadastrar</button>
        </form>
        <p class="text-stone-400">Já tem uma conta? <a href="?action=login" class="text-lime-500 hover:underline">Faça login</a></p>
      </section>
    <?php endif; ?>
  </main>

</body>
</html>