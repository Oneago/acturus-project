<?php


namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateMiddleware extends Command
{
    protected static $defaultName = "make:middleware";
    private $middlewareName;

    protected function configure()
    {
        $this
            ->setDescription("Create a new middleware for this app")
            ->addArgument("middleware name", InputArgument::REQUIRED, "Name for use in middleware")
            ->setHelp("This command create a new middleware passing a name");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("<info>Creating {$input->getArgument('middleware name')}</info>");
        $output->writeln("<info>Wait a moment please...</info>");
        $output->writeln("");

        $this->middlewareName = ucfirst($input->getArgument('middleware name')) . "Middleware.php";
        $output->writeln("<info>Creating {$this->middlewareName}</info>");
        $this->createFile($this->middlewareName, "https://raw.githubusercontent.com/Oneago/oneago-php-template/master/middlewares/ExampleMiddleware.php", "middlewares");
        $output->writeln("<info>{$this->middlewareName} Created!</info>");
        $output->writeln("");

        $output->writeln("<info>{$input->getArgument('middleware name')} view has created!</info>");
        return Command::SUCCESS;
    }

    private function createFile(string $name, string $url, string $path)
    {
        $fp = fopen("$path/$name", "w+");

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        curl_close($ch);

        $contents = str_replace(
            [
                "ExampleMiddleware",
            ],
            [
                str_replace(".php", "", $this->middlewareName),
            ], $data);
        fwrite($fp, $contents);
        fclose($fp);
        exec("git add $path/$name");
    }
}