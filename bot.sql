-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/12/2023 às 07:22
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bot`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'olá|oi|hello|eai|iae', 'Olá! Como você está?'),
(2, 'opções|o que você consegue fazer?|o que consegue fazer?|o que posso falar?|não sei o que falar|não sei', 'Algumas opções de chat são:\r\n\"olá\", \"qual o seu nome?\", \"tudo bem com você?\", \"da onde você é?\", \"criador\", \"linguagens\", \"tchau\". E mais algumas escondidas :P\r\n\r\n'),
(3, 'criador|quem criou você?|quem te fez?', 'Meu criador é o Cauê Guise Mondek, um Desenvolvedor Web Full-stack'),
(4, 'materiais|tecnologias|linguagens|do que você é feito?|como você foi feito?|desenvolvido', 'Fui desenvolvido com PHP, CSS, JQuery e MySQL'),
(5, 'adeus|tchau|até mais', 'Tchau! Foi bom conversar com você!'),
(6, 'seu nome|qual seu nome?|qual o seu nome?|você tem nome?|você tem um nome?', 'Meu nome é Chatbot, fui Desenvolvido para testar alguns recursos :)'),
(7, 'estou bem e você?|estou bem|bem', 'Que bom! É sempre bom estar bem, e eu estou ótimo também =)'),
(8, 'triste|estou triste|estou triste e você?', 'Poxa, está tudo bem ficar triste, é impossível alguém ser feliz sempre, tudo melhora com o tempo'),
(9, 'tudo bem com você?|você está bem?|ta bem?|como você está?', 'Estou ótimo obrigado por perguntar :)'),
(10, 'da onde você é?|onde você mora|onde mora', 'Bem eu sou uma máquina, mas podemos dizer que moro no Brasil, no Paraná ^^'),
(11, 'obrigado|obrigada|muito obrigado|muito obrigada|valeu|valeu mesmo', 'Não há o que agradecer, fico feliz de ter sido útil para você =D');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
