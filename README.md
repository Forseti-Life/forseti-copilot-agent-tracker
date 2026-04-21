# Forseti Copilot Agent Tracker

LangGraph console UI for orchestration observability and agent telemetry.

## Overview

`copilot_agent_tracker` is a Drupal module that provides a web-based console for monitoring and managing Copilot agents coordinated by the LangGraph orchestrator.

## Features

- **7 Console Sections:** Home, Build, Test, Run, Observe, Release, Admin
- **Live Telemetry:** Node traces, execution metrics, drift detection, alerts
- **Agent Monitoring:** Track agent dispatch, queue depth, concurrency
- **Release Management:** Version promotion and rollback controls
- **Governance:** RBAC, secrets, quotas, compliance

## Installation

```bash
composer require forseti-life/forseti-copilot-agent-tracker
drush pm:enable copilot_agent_tracker
```

## Configuration

Set the `COPILOT_HQ_ROOT` environment variable to access live orchestrator telemetry:

```bash
export COPILOT_HQ_ROOT=/home/ubuntu/forseti.life/copilot-hq
```

## Routes

All routes require the `administer copilot agent tracker` permission:

- `/admin/reports/copilot-agent-tracker/langgraph-console` — Console home
- `/admin/reports/copilot-agent-tracker/langgraph-console/build` — Build section
- `/admin/reports/copilot-agent-tracker/langgraph-console/test` — Test section
- `/admin/reports/copilot-agent-tracker/langgraph-console/run` — Run section
- `/admin/reports/copilot-agent-tracker/langgraph-console/observe` — Observe section
- `/admin/reports/copilot-agent-tracker/langgraph-console/release` — Release section
- `/admin/reports/copilot-agent-tracker/langgraph-console/admin` — Admin section

## Development

This module is part of the Forseti-Life platform and integrates with the LangGraph orchestration engine.

### Phase Roadmap

- **Phase 1 (Done):** Stub controllers and routing
- **Phase 2 (Pending):** Build section UI
- **Phase 3 (Pending):** Test section UI
- **Phase 4 (In Progress):** Run section UI
- **Phase 5 (In Progress):** Observe section UI (telemetry dashboard)
- **Phase 6 (Pending):** Release section UI
- **Phase 7 (Pending):** Admin section UI

## Contributing

See [CONTRIBUTING.md](CONTRIBUTING.md) for guidelines.

## License

MIT License - See [LICENSE](LICENSE)
