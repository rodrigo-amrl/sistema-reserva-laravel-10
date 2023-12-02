# Sistema de Reserva de Salas com Laravel 10


# Histórias de Usuário/Requisitos

História de Usuário 1: Como um usuário, eu quero ver a lista de salas disponíveis para reservas.
Critérios de Aceitação:
Ao acessar a página inicial, devo ver uma lista de salas com detalhes, como nome, capacidade e recursos.
As salas devem ser apresentadas de forma clara e organizada.

História de Usuário 2: Como um usuário, eu quero visualizar os detalhes de uma sala antes de fazer uma reserva.
Critérios de Aceitação:
Ao clicar em uma sala na lista, devo ser redirecionado para uma página com informações detalhadas sobre a sala, incluindo capacidade e recursos.

História de Usuário 3: Como um usuário, eu quero poder fazer uma reserva de uma sala para uma data e hora específicas.
Critérios de Aceitação:
Devo ter a opção de selecionar a data e hora desejadas.
Após preencher o formulário de reserva, a reserva deve ser salva no sistema.
Se a sala já estiver reservada para a data e hora selecionadas, devo receber uma mensagem indicando a indisponibilidade.

História de Usuário 4: Como um usuário, eu quero ver minhas reservas atuais e poder cancelar uma reserva existente.
Critérios de Aceitação:
Devo ter uma página onde posso visualizar todas as minhas reservas atuais.
Cada reserva deve ser exibida com detalhes, como data, hora e status.
Devo ter a opção de cancelar uma reserva existente.

História de Usuário 5: Como um administrador, eu quero aprovar ou rejeitar solicitações de reserva.
Critérios de Aceitação:
Devo ter uma página de administração onde posso ver todas as solicitações de reserva pendentes.
Cada reserva deve ser exibida com detalhes, como data, hora, usuário solicitante e status.
Devo ter a opção de aprovar ou rejeitar cada solicitação.

História de Usuário 6: Como um usuário, eu quero receber notificações sobre o status da minha reserva.
Critérios de Aceitação:
Devo receber uma notificação por e-mail quando minha reserva for aprovada ou rejeitada.
A notificação deve incluir detalhes relevantes sobre a reserva.
