<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

  <nav class="bg-gray-300">
    <div class="flex justify-between container items-center mx-auto p-4">
      <div><a href="#" class="text-2x1 font-semibold">FlowUP</a></div>
      <ul class="font-medium">
        <li class="px-4">Cadastro de Cliente</li>
      </ul>
    </div>
  </nav>


  <div class="container mx-auto mb-4">

    <h1 class="text-4xl font-bold underline text-center mb-10">
      Lista de Clintes
    </h1>



    <div class="relative overflow-x-auto">
      <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-6 py-3">
              Nome
            </th>
            <th scope="col" class="px-6 py-3">
              Telefone
            </th>
            <th scope="col" class="px-6 py-3">
              Comentario
            </th>
          </tr>
        </thead>
        <tbody>
        @foreach($clients as $cliente)
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              {{$cliente->nome}}
            </th>
            <td class="px-6 py-4">
              {{$cliente->telefone}}
            </td>
            <td class="px-6 py-4">
              {{$cliente->comentario}}
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>

  </div>
</body>

</html>