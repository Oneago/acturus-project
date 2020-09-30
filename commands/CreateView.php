<?php


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateView extends Command
{
    protected static $defaultName = "make:view";
    private $viewName;
    private $modelName;

    protected function configure()
    {
        $this
            ->setDescription("Create a new view for this app")
            ->addArgument("view name", InputArgument::REQUIRED, "Name for use in view file and model file")
            ->setHelp("This command create a new view passing a name");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("<info>Creating {$input->getArgument('view name')}</info>");
        $output->writeln("<info>Wait a moment please...</info>");
        $output->writeln("");
        $this->viewName = $input->getArgument('view name') . ".twig";
        $this->modelName = ucfirst($input->getArgument('view name')) . "Model.php";

        $this->createFile($this->viewName, "https://raw.githubusercontent.com/Oneago/oneago-php-template/master/views/example.twig", "views");
        $this->createFile($this->modelName, "https://raw.githubusercontent.com/Oneago/oneago-php-template/master/controllers/ExampleController.php", "models");
        exec("git add .");

        $output->writeln("<info>{$input->getArgument('view name')} view has created!</info>");
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
                "example.twig",
                "ExampleController",
                " is a example class, you can delete or use as a model example for your app"
            ],
            [
                $this->viewName,
                str_replace(".php", "", $this->modelName),
                ""
            ], $data);
        fwrite($fp, $contents);
        fclose($fp);
    }
}