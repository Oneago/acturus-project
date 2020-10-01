<?php


namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SassCompiler extends Command
{
    protected static $defaultName = "make:sass:compile";

    protected function configure()
    {
        $this
            ->setDescription("Compile a sass file")
            ->addArgument("name", InputArgument::REQUIRED, "Name for sass file")
            ->setHelp("This command compile a sass file in public/css");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');
        $name .= str_contains($name, ".scss") ? "" : ".scss";

        $output->writeln("<info>Compiling sass file in public/css/$name</info>");

        if (!is_file("public/css/$name")) {
            $output->writeln("<error>$name not is a valid file</error>");
            return self::FAILURE;
        }
        $cssName = str_replace('.scss', '.css', $name);
        exec("sass public/css/$name public/css/$cssName");
        exec("git add public/css/$cssName");
        exec("git add public/css/$cssName.map");
        return self::SUCCESS;
    }
}