<div class="">
    {{$project}}
    <form wire:submit.prevent="save" class="w-full">
	    <div class="w-full px-3 mb-6 mt-6 md:mb-0">            
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">Nome do projeto</label>
            <input wire:model="project.title"
            type="text" 
            class="appearance-none block w-full bg-gray-100 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
            id="" />
            <!--<p class="text-red-500 text-xs italic">Mensagem de erro</p>-->
    	</div>
        <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
                Descrição do projeto
            </label>
            <textarea wire:model="project.desc"
            class="appearance-none block w-full bg-gray-100 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
            rows="4"
            type="" 
            id="" ></textarea>
    	</div>

        <button
            class="px-3 ml-3 py-2 bg-green-400" type="submit">
            Cadastrar
        </button>
    </form>
</div>
