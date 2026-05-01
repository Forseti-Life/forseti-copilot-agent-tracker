<?php

namespace Drupal\copilot_agent_tracker\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Url;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Compatibility shim that redirects legacy tracker routes to drupal_langgraph.
 */
final class LangGraphConsoleStubController extends ControllerBase {

  public function home(): RedirectResponse {
    return $this->redirectTo('drupal_langgraph.langgraph_console_home');
  }

  public function build(): RedirectResponse {
    return $this->redirectTo('drupal_langgraph.langgraph_console_build');
  }

  public function test(): RedirectResponse {
    return $this->redirectTo('drupal_langgraph.langgraph_console_test');
  }

  public function run(): RedirectResponse {
    return $this->redirectTo('drupal_langgraph.langgraph_console_run');
  }

  public function observe(): RedirectResponse {
    return $this->redirectTo('drupal_langgraph.langgraph_console_observe');
  }

  public function release(): RedirectResponse {
    return $this->redirectTo('drupal_langgraph.langgraph_console_release');
  }

  public function admin(): RedirectResponse {
    return $this->redirectTo('drupal_langgraph.langgraph_console_admin');
  }

  public function subsection(string $section, string $subsection): RedirectResponse {
    return $this->redirectTo('drupal_langgraph.langgraph_console_subsection', [
      'section' => $section,
      'subsection' => $subsection,
    ]);
  }

  private function redirectTo(string $route_name, array $parameters = []): RedirectResponse {
    return new RedirectResponse(Url::fromRoute($route_name, $parameters)->toString());
  }
}
