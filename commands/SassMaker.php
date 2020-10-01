<?php


namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SassMaker extends Command
{
    protected static $defaultName = "make:sass:new";

    protected function configure()
    {
        $this
            ->setDescription("Create an sass file")
            ->addArgument("name", InputArgument::REQUIRED, "Name for sass file")
            ->setHelp("This command create a sass file in public/css");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');
        $name .= str_contains($name, ".scss") ? "" : ".scss";
        $userName = get_current_user();
        $date = date("d/m/Y");

        $output->writeln("<info>Creating in public/css/$name</info>");

        @mkdir("public");
        @mkdir("public/css");
        $fp = fopen("public/css/$name", "w+");
        fwrite($fp, "/*" . PHP_EOL);
        fwrite($fp, " * $name" . PHP_EOL);
        fwrite($fp, " * Created by $userName" . PHP_EOL);
        fwrite($fp, " * $date" . PHP_EOL);
        fwrite($fp, " */" . PHP_EOL);
        fclose($fp);
        exec("git add .");

        $output->writeln("<info>{$input->getArgument('name')} created!</info>");
        return Command::SUCCESS;
    }
}