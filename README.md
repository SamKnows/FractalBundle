Fractal Bundle
=============================

This bundle provides integration of [league/fractal](https://github.com/thephpleague/fractal) for Symfony. In addition it allows you to use [transformers as a services](#using-transformers-as-services).

**This is a fork version of [samjarrett/FractalBundle](https://github.com/samjarrett/FractalBundle).**

## Getting Started

Requirements:

* PHP >= 7.4
* Symfony 4, 5 and 6

Install through composer:

```
composer require fd6130/fractal-bundle
```

If you are using symfony flex, it will automatic register the bundle for you.

## Usage

You can use command `php bin/console make:fractal-transformer` to create a transformer.

Or, just create it by your own and place it in `src/Transformer`.

```php
class UserTransformer extends TransformerAbstract
{    
    public function transform(User $user): array
    {
        $data = [
            'id' => $user->id(),
            'name' => $user->name(),
        ];
        
        return $data;
    }
}

$resource = new Collection($users, UserTransformer::class);

$response = $manager->createData($resource)->toArray();
```

### Inject services to the transformers

You can inject services to your transformer through constructor:

```php
class UserTransformer extends TransformerAbstract
{
    private $entityManager;
    
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    public function transform(User $user): array
    {
        $data = [
            'id' => $user->id(),
            'name' => $user->name(),
        ];

        // $this->entityManager->getRepository(...)
        
        return $data;
    }
}
```
