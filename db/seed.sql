
--
-- Database: `plataforma`
--

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'leonardo', 'leocostaba1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'leon', 'leo@mail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'Lucas', 'lucas@mail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'Luana Santos', 'lua@mail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Extraindo dados da tabela `arquivo`
--

INSERT INTO `arquivo` (`id`, `autor`, `titulo`, `local`, `description`) VALUES
(32, 1, 'CodificaÃ§Ã£o de Huffman, uma nova abordagem!', '64f570cc7bd9b09f7dfb29de4b1459dc.ppt', 'Meu projeto tem a ideia de otimizar a codificaÃ§Ã£o que conhecemos como codificaÃ§Ã£o de Huffman, nessa abordagem apresento algumas modificaÃ§Ãµes feitas para otimizaÃ§Ã£o do tempo de execuÃ§Ã£o.'),
(33, 1, 'ExaustÃ£o, cansaÃ§o e mentalidade tem cura', '4eedd351e85db7114b85d1a7422f4af5.pdf', 'Sabe aquele trabalho de fim de semestre, que vocÃª tem que entregar no ultimo dia do semestre? Tenho uma idea de como vocÃª nÃ£o precisar ficar atÃ© de manhÃ£ acordado! Estude para todas as provas e passe logo... no meu trabalho eu conto mais informaÃ§Ãµes disso'),
(34, 2, 'Poker, do lixo ao luxo!', 'e64a9be776609079cc21d8e473ac391d.pdf', 'Criei mÃ©todos extraordinÃ¡rios para que vocÃª nunca perca uma partida de poker, estou compartilhando isso pois acredito que ao meu trabalho ainda precisa de algumas refatoraÃ§Ãµes.');

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `comentario`, `id_file`, `arquivo_autor`, `id_user`) VALUES
(1, 'Muito bom cara, eu irei testar e tentarei contribuir com comentÃ¡rios em seu trabalho.', 34, 2, 2),
(2, 'Estudei um pouco e acredito que vocÃª deveria analisar os grÃ¡ficos dos jogos da WSOP. LÃ¡ eles mostram algumas probabilidades agressivas de jogo', 34, 2, 2),
(3, 'Interessante, bom trabalho!', 34, 2, 4),
(4, 'Hoje tava tendo uma partida entre NGUYEN e RUANE, eles tiveram um POT de 8600000 na mesa final. vale a pena vocÃª ver essa jogada para analisar o perfil psicolÃ³gico dos jogadores.', 34, 2, 4),
(10, 'Com a rotina corrida do dia a dia, o tempo que se dedica a tarefas para descansar o corpo e a mente Ã© cada vez mais reduzido. Entramos num processo em que o corpo comeÃ§a a ficar desgastado e a mente nÃ£o consegue se "desligar" daquele projeto no trabalho, das contas para pagar, do boletim das crianÃ§as, da pia que comeÃ§ou a vazar (de novo) e de outra listas situaÃ§Ãµes. Tudo isso acaba acelerando um quadro de exaustÃ£o emocional, uma condiÃ§Ã£o que Ã© mais grave que a estafa e estÃ¡ a um passo do estresse e de suas consequÃªncias sÃ©rias para a saÃºde. \r\n\r\nO conceito de exaustÃ£o estÃ¡ ligado ao conceito de estresse. O estresse Ã© dividido em trÃªs nÃ­veis, chamados de alerta, reestruturaÃ§Ã£o e, por fim, exaustÃ£o, que corresponde Ã  fase em que o indivÃ­duo jÃ¡ apresenta pensamentos negativos, falta de vontade de fazer as coisas, perda de sono, ansiedade acentuada, irritabilidade, entre outras caracterÃ­sticas fÃ­sicas como alergias, gastrites e enxaqueca. ', 33, 1, 4);
