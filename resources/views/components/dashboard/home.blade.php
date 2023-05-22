<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    
  @foreach($teams as $team)
    Projeto: {{$team->name}}<br/>
    <b>Criador:</b> {{$team->user->name}}<br/>

    @foreach ($team->users->sortBy('name') as $user)
    <b>Membros:</b> {{ $user->name }}<br/>
     @endforeach                     
  @endforeach
</div>