
<form wire:submit.prevent="submit">
    <x-form.input label="Título" model="title" placeholder="campo obrigatório com até 75 caracteres"/>
    <x-form.input label="Sub título" model="subtitle" placeholder="até 255 caracteres" />
    <x-form.textarea label="Adicione o conteúdo" model="content"/>
    <x-form.button text="Salvar" />
</form>
                                       