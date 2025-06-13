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
            Cadastrar Novo Cliente
        </h1>



        <form class="max-w-sm mx-auto" method="post" action="/index">
           @csrf
            <div class="mb-5">
                <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome Completo</label>
                <input type="text" id="nome" name="nome" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" placeholder="Seu nome" required />
            </div>
            <div class="mb-5">
                <label for="telefone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefone Completo</label>
                <input type="text" placeholder="Telefone" id="telefone" name="telefone" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" required />
            </div>
            <div class="mb-5">
                <label for="comentario" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Digite Comentario</label>
                <input type="text" name="comentario" placeholder="comentario" id="comentario" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" required />
            </div>
            <div class="flex items-start mb-5">
                <div class="flex items-center h-5">
                    <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded-sm bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                </div>
                <label for="terms" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a></label>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register new account</button>
        </form>


    </div>
</body>

</html>