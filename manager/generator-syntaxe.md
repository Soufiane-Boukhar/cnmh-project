
## Afficher le nom du model

{{ $config->modelNames->camelPlural }}
@@extends('layouts.app') -> @extends('layouts.app')

## Model name 

- Project
  - {{ $config->modelNames->name }}
- Projects 
  - {{ $config->modelNames->plural }}
  - 
- couvertureMedical
  - {{ $config->modelNames->camel }}
- couvertureMedicals
  - {{ $config->modelNames->camelPlural }}
- 
  - {{ $config->modelNames->humanPlural }} 
- couverture_medicals
  - {{ $config->modelNames->snakePlural }} 


## Route

@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.create') }}

{{ route('projects.create') }}


