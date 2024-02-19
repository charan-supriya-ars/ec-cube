<?php

namespace ContainerUXmovuF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_WorkflowDumpService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'console.command.workflow_dump' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\WorkflowDumpCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'WorkflowDumpCommand.php';

        $container->privates['console.command.workflow_dump'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\WorkflowDumpCommand(['state_machine.order' => new \Symfony\Component\Workflow\Definition([0 => '1', 1 => '3', 2 => '4', 3 => '5', 4 => '6', 5 => '7', 6 => '8', 7 => '9'], [0 => ($container->privates['.state_machine.order.transition.0'] ?? ($container->privates['.state_machine.order.transition.0'] = new \Symfony\Component\Workflow\Transition('pay', '1', '6'))), 1 => ($container->privates['.state_machine.order.transition.1'] ?? ($container->privates['.state_machine.order.transition.1'] = new \Symfony\Component\Workflow\Transition('packing', '1', '4'))), 2 => ($container->privates['.state_machine.order.transition.2'] ?? ($container->privates['.state_machine.order.transition.2'] = new \Symfony\Component\Workflow\Transition('packing', '6', '4'))), 3 => ($container->privates['.state_machine.order.transition.3'] ?? ($container->privates['.state_machine.order.transition.3'] = new \Symfony\Component\Workflow\Transition('cancel', '1', '3'))), 4 => ($container->privates['.state_machine.order.transition.4'] ?? ($container->privates['.state_machine.order.transition.4'] = new \Symfony\Component\Workflow\Transition('cancel', '4', '3'))), 5 => ($container->privates['.state_machine.order.transition.5'] ?? ($container->privates['.state_machine.order.transition.5'] = new \Symfony\Component\Workflow\Transition('cancel', '6', '3'))), 6 => ($container->privates['.state_machine.order.transition.6'] ?? ($container->privates['.state_machine.order.transition.6'] = new \Symfony\Component\Workflow\Transition('back_to_in_progress', '3', '4'))), 7 => ($container->privates['.state_machine.order.transition.7'] ?? ($container->privates['.state_machine.order.transition.7'] = new \Symfony\Component\Workflow\Transition('ship', '1', '5'))), 8 => ($container->privates['.state_machine.order.transition.8'] ?? ($container->privates['.state_machine.order.transition.8'] = new \Symfony\Component\Workflow\Transition('ship', '6', '5'))), 9 => ($container->privates['.state_machine.order.transition.9'] ?? ($container->privates['.state_machine.order.transition.9'] = new \Symfony\Component\Workflow\Transition('ship', '4', '5'))), 10 => ($container->privates['.state_machine.order.transition.10'] ?? ($container->privates['.state_machine.order.transition.10'] = new \Symfony\Component\Workflow\Transition('return', '5', '9'))), 11 => ($container->privates['.state_machine.order.transition.11'] ?? ($container->privates['.state_machine.order.transition.11'] = new \Symfony\Component\Workflow\Transition('cancel_return', '9', '5')))], [0 => '1'], ($container->privates['state_machine.order.metadata_store'] ?? $container->getStateMachine_Order_MetadataStoreService()))]);

        $instance->setName('workflow:dump');
        $instance->setDescription('Dump a workflow');

        return $instance;
    }
}
