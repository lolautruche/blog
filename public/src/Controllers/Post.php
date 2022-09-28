<?php

namespace Application\Controllers;

use Application\Model\Repository\PostRepository;
use Application\Model\Repository\CommentRepository;
use Application\Lib\DatabaseConnection;
use Application\Model\Repository\UsersRepository;

class Post
{
    function execute(string $identifier): void
    {
        $connection = new DatabaseConnection();

        $postRepository = new PostRepository();
        $postRepository->connection = $connection;
        $post = $postRepository->getPost($identifier);

        $usersRepository = new UsersRepository($connection);
        $user = $usersRepository->getUserById($post->author);

        $commentRepository = new CommentRepository($connection, $usersRepository);
        $comments = $commentRepository->getComments($identifier);

        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $errors = [];
            $title = null;
            $comment = null;
            if (empty($_POST['title'])) {
                $errors['title'] = 'Veuillez remplir ce champ.';
            }
            if (empty($_POST['comment'])) {
                $errors['comment'] = 'Veuillez remplir ce champ.';
            }

            $title = htmlspecialchars($_POST['title']);
            $comment = htmlspecialchars($_POST['comment'], ENT_COMPAT);

            if (count($errors) === 0) {
                $success = $commentRepository->createComment($identifier, $_SESSION['LOGGED_USER_ID'], $title, $comment);

                if (!$success) {
                    $errorMessage = sprintf('Les informations envoyées ne permettent pas d\'ajouter le commentaire!');
                } else {
                    header('Location: index.php?action=post&id=' . $identifier);
                }
            }
        }

        require('templates/post.php');
    }
}
