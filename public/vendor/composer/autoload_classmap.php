<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Application\\Common\\Container' => $baseDir . '/src/Common/Container.php',
    'Application\\Common\\Redirect' => $baseDir . '/src/Common/Redirect.php',
    'Application\\Controllers\\Comment\\CheckComment' => $baseDir . '/src/Controllers/Comment/CheckComment.php',
    'Application\\Controllers\\Comment\\DeleteComment' => $baseDir . '/src/Controllers/Comment/DeleteComment.php',
    'Application\\Controllers\\Dashboard' => $baseDir . '/src/Controllers/Dashboard.php',
    'Application\\Controllers\\Homepage' => $baseDir . '/src/Controllers/Homepage.php',
    'Application\\Controllers\\MailerController' => $baseDir . '/src/Controllers/MailerController.php',
    'Application\\Controllers\\Post\\AddPost' => $baseDir . '/src/Controllers/Post/AddPost.php',
    'Application\\Controllers\\Post\\DeletePost' => $baseDir . '/src/Controllers/Post/DeletePost.php',
    'Application\\Controllers\\Post\\Post' => $baseDir . '/src/Controllers/Post/Post.php',
    'Application\\Controllers\\Post\\Posts' => $baseDir . '/src/Controllers/Post/Posts.php',
    'Application\\Controllers\\Post\\UpdatePost' => $baseDir . '/src/Controllers/Post/UpdatePost.php',
    'Application\\Controllers\\SubmitContact' => $baseDir . '/src/Controllers/SubmitContact.php',
    'Application\\Controllers\\User\\DeleteUser' => $baseDir . '/src/Controllers/User/DeleteUser.php',
    'Application\\Controllers\\User\\Login' => $baseDir . '/src/Controllers/User/Login.php',
    'Application\\Controllers\\User\\Logout' => $baseDir . '/src/Controllers/User/Logout.php',
    'Application\\Controllers\\User\\SignUp' => $baseDir . '/src/Controllers/User/SignUp.php',
    'Application\\Controllers\\User\\UpdateUser' => $baseDir . '/src/Controllers/User/UpdateUser.php',
    'Application\\Lib\\DatabaseConnection' => $baseDir . '/src/Lib/DatabaseConnection.php',
    'Application\\Lib\\Mailer' => $baseDir . '/src/Lib/Mailer.php',
    'Application\\Model\\Category' => $baseDir . '/src/Model/Category.php',
    'Application\\Model\\Comment' => $baseDir . '/src/Model/Comment.php',
    'Application\\Model\\Post' => $baseDir . '/src/Model/Post.php',
    'Application\\Model\\Repository\\CategoryRepository' => $baseDir . '/src/Model/Repository/CategoryRepository.php',
    'Application\\Model\\Repository\\CommentRepository' => $baseDir . '/src/Model/Repository/CommentRepository.php',
    'Application\\Model\\Repository\\PostRepository' => $baseDir . '/src/Model/Repository/PostRepository.php',
    'Application\\Model\\Repository\\UsersRepository' => $baseDir . '/src/Model/Repository/UsersRepository.php',
    'Application\\Model\\User' => $baseDir . '/src/Model/User.php',
    'Application\\Verifier\\PictureVerifier' => $baseDir . '/src/Verifier/PictureVerifier.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Doctrine\\Common\\Lexer\\AbstractLexer' => $vendorDir . '/doctrine/lexer/lib/Doctrine/Common/Lexer/AbstractLexer.php',
    'Egulias\\EmailValidator\\EmailLexer' => $vendorDir . '/egulias/email-validator/src/EmailLexer.php',
    'Egulias\\EmailValidator\\EmailParser' => $vendorDir . '/egulias/email-validator/src/EmailParser.php',
    'Egulias\\EmailValidator\\EmailValidator' => $vendorDir . '/egulias/email-validator/src/EmailValidator.php',
    'Egulias\\EmailValidator\\MessageIDParser' => $vendorDir . '/egulias/email-validator/src/MessageIDParser.php',
    'Egulias\\EmailValidator\\Parser' => $vendorDir . '/egulias/email-validator/src/Parser.php',
    'Egulias\\EmailValidator\\Parser\\Comment' => $vendorDir . '/egulias/email-validator/src/Parser/Comment.php',
    'Egulias\\EmailValidator\\Parser\\CommentStrategy\\CommentStrategy' => $vendorDir . '/egulias/email-validator/src/Parser/CommentStrategy/CommentStrategy.php',
    'Egulias\\EmailValidator\\Parser\\CommentStrategy\\DomainComment' => $vendorDir . '/egulias/email-validator/src/Parser/CommentStrategy/DomainComment.php',
    'Egulias\\EmailValidator\\Parser\\CommentStrategy\\LocalComment' => $vendorDir . '/egulias/email-validator/src/Parser/CommentStrategy/LocalComment.php',
    'Egulias\\EmailValidator\\Parser\\DomainLiteral' => $vendorDir . '/egulias/email-validator/src/Parser/DomainLiteral.php',
    'Egulias\\EmailValidator\\Parser\\DomainPart' => $vendorDir . '/egulias/email-validator/src/Parser/DomainPart.php',
    'Egulias\\EmailValidator\\Parser\\DoubleQuote' => $vendorDir . '/egulias/email-validator/src/Parser/DoubleQuote.php',
    'Egulias\\EmailValidator\\Parser\\FoldingWhiteSpace' => $vendorDir . '/egulias/email-validator/src/Parser/FoldingWhiteSpace.php',
    'Egulias\\EmailValidator\\Parser\\IDLeftPart' => $vendorDir . '/egulias/email-validator/src/Parser/IDLeftPart.php',
    'Egulias\\EmailValidator\\Parser\\IDRightPart' => $vendorDir . '/egulias/email-validator/src/Parser/IDRightPart.php',
    'Egulias\\EmailValidator\\Parser\\LocalPart' => $vendorDir . '/egulias/email-validator/src/Parser/LocalPart.php',
    'Egulias\\EmailValidator\\Parser\\PartParser' => $vendorDir . '/egulias/email-validator/src/Parser/PartParser.php',
    'Egulias\\EmailValidator\\Result\\InvalidEmail' => $vendorDir . '/egulias/email-validator/src/Result/InvalidEmail.php',
    'Egulias\\EmailValidator\\Result\\MultipleErrors' => $vendorDir . '/egulias/email-validator/src/Result/MultipleErrors.php',
    'Egulias\\EmailValidator\\Result\\Reason\\AtextAfterCFWS' => $vendorDir . '/egulias/email-validator/src/Result/Reason/AtextAfterCFWS.php',
    'Egulias\\EmailValidator\\Result\\Reason\\CRLFAtTheEnd' => $vendorDir . '/egulias/email-validator/src/Result/Reason/CRLFAtTheEnd.php',
    'Egulias\\EmailValidator\\Result\\Reason\\CRLFX2' => $vendorDir . '/egulias/email-validator/src/Result/Reason/CRLFX2.php',
    'Egulias\\EmailValidator\\Result\\Reason\\CRNoLF' => $vendorDir . '/egulias/email-validator/src/Result/Reason/CRNoLF.php',
    'Egulias\\EmailValidator\\Result\\Reason\\CharNotAllowed' => $vendorDir . '/egulias/email-validator/src/Result/Reason/CharNotAllowed.php',
    'Egulias\\EmailValidator\\Result\\Reason\\CommaInDomain' => $vendorDir . '/egulias/email-validator/src/Result/Reason/CommaInDomain.php',
    'Egulias\\EmailValidator\\Result\\Reason\\CommentsInIDRight' => $vendorDir . '/egulias/email-validator/src/Result/Reason/CommentsInIDRight.php',
    'Egulias\\EmailValidator\\Result\\Reason\\ConsecutiveAt' => $vendorDir . '/egulias/email-validator/src/Result/Reason/ConsecutiveAt.php',
    'Egulias\\EmailValidator\\Result\\Reason\\ConsecutiveDot' => $vendorDir . '/egulias/email-validator/src/Result/Reason/ConsecutiveDot.php',
    'Egulias\\EmailValidator\\Result\\Reason\\DetailedReason' => $vendorDir . '/egulias/email-validator/src/Result/Reason/DetailedReason.php',
    'Egulias\\EmailValidator\\Result\\Reason\\DomainAcceptsNoMail' => $vendorDir . '/egulias/email-validator/src/Result/Reason/DomainAcceptsNoMail.php',
    'Egulias\\EmailValidator\\Result\\Reason\\DomainHyphened' => $vendorDir . '/egulias/email-validator/src/Result/Reason/DomainHyphened.php',
    'Egulias\\EmailValidator\\Result\\Reason\\DomainTooLong' => $vendorDir . '/egulias/email-validator/src/Result/Reason/DomainTooLong.php',
    'Egulias\\EmailValidator\\Result\\Reason\\DotAtEnd' => $vendorDir . '/egulias/email-validator/src/Result/Reason/DotAtEnd.php',
    'Egulias\\EmailValidator\\Result\\Reason\\DotAtStart' => $vendorDir . '/egulias/email-validator/src/Result/Reason/DotAtStart.php',
    'Egulias\\EmailValidator\\Result\\Reason\\EmptyReason' => $vendorDir . '/egulias/email-validator/src/Result/Reason/EmptyReason.php',
    'Egulias\\EmailValidator\\Result\\Reason\\ExceptionFound' => $vendorDir . '/egulias/email-validator/src/Result/Reason/ExceptionFound.php',
    'Egulias\\EmailValidator\\Result\\Reason\\ExpectingATEXT' => $vendorDir . '/egulias/email-validator/src/Result/Reason/ExpectingATEXT.php',
    'Egulias\\EmailValidator\\Result\\Reason\\ExpectingCTEXT' => $vendorDir . '/egulias/email-validator/src/Result/Reason/ExpectingCTEXT.php',
    'Egulias\\EmailValidator\\Result\\Reason\\ExpectingDTEXT' => $vendorDir . '/egulias/email-validator/src/Result/Reason/ExpectingDTEXT.php',
    'Egulias\\EmailValidator\\Result\\Reason\\ExpectingDomainLiteralClose' => $vendorDir . '/egulias/email-validator/src/Result/Reason/ExpectingDomainLiteralClose.php',
    'Egulias\\EmailValidator\\Result\\Reason\\LabelTooLong' => $vendorDir . '/egulias/email-validator/src/Result/Reason/LabelTooLong.php',
    'Egulias\\EmailValidator\\Result\\Reason\\LocalOrReservedDomain' => $vendorDir . '/egulias/email-validator/src/Result/Reason/LocalOrReservedDomain.php',
    'Egulias\\EmailValidator\\Result\\Reason\\NoDNSRecord' => $vendorDir . '/egulias/email-validator/src/Result/Reason/NoDNSRecord.php',
    'Egulias\\EmailValidator\\Result\\Reason\\NoDomainPart' => $vendorDir . '/egulias/email-validator/src/Result/Reason/NoDomainPart.php',
    'Egulias\\EmailValidator\\Result\\Reason\\NoLocalPart' => $vendorDir . '/egulias/email-validator/src/Result/Reason/NoLocalPart.php',
    'Egulias\\EmailValidator\\Result\\Reason\\RFCWarnings' => $vendorDir . '/egulias/email-validator/src/Result/Reason/RFCWarnings.php',
    'Egulias\\EmailValidator\\Result\\Reason\\Reason' => $vendorDir . '/egulias/email-validator/src/Result/Reason/Reason.php',
    'Egulias\\EmailValidator\\Result\\Reason\\SpoofEmail' => $vendorDir . '/egulias/email-validator/src/Result/Reason/SpoofEmail.php',
    'Egulias\\EmailValidator\\Result\\Reason\\UnOpenedComment' => $vendorDir . '/egulias/email-validator/src/Result/Reason/UnOpenedComment.php',
    'Egulias\\EmailValidator\\Result\\Reason\\UnableToGetDNSRecord' => $vendorDir . '/egulias/email-validator/src/Result/Reason/UnableToGetDNSRecord.php',
    'Egulias\\EmailValidator\\Result\\Reason\\UnclosedComment' => $vendorDir . '/egulias/email-validator/src/Result/Reason/UnclosedComment.php',
    'Egulias\\EmailValidator\\Result\\Reason\\UnclosedQuotedString' => $vendorDir . '/egulias/email-validator/src/Result/Reason/UnclosedQuotedString.php',
    'Egulias\\EmailValidator\\Result\\Reason\\UnusualElements' => $vendorDir . '/egulias/email-validator/src/Result/Reason/UnusualElements.php',
    'Egulias\\EmailValidator\\Result\\Result' => $vendorDir . '/egulias/email-validator/src/Result/Result.php',
    'Egulias\\EmailValidator\\Result\\SpoofEmail' => $vendorDir . '/egulias/email-validator/src/Result/SpoofEmail.php',
    'Egulias\\EmailValidator\\Result\\ValidEmail' => $vendorDir . '/egulias/email-validator/src/Result/ValidEmail.php',
    'Egulias\\EmailValidator\\Validation\\DNSCheckValidation' => $vendorDir . '/egulias/email-validator/src/Validation/DNSCheckValidation.php',
    'Egulias\\EmailValidator\\Validation\\DNSGetRecordWrapper' => $vendorDir . '/egulias/email-validator/src/Validation/DNSGetRecordWrapper.php',
    'Egulias\\EmailValidator\\Validation\\DNSRecords' => $vendorDir . '/egulias/email-validator/src/Validation/DNSRecords.php',
    'Egulias\\EmailValidator\\Validation\\EmailValidation' => $vendorDir . '/egulias/email-validator/src/Validation/EmailValidation.php',
    'Egulias\\EmailValidator\\Validation\\Exception\\EmptyValidationList' => $vendorDir . '/egulias/email-validator/src/Validation/Exception/EmptyValidationList.php',
    'Egulias\\EmailValidator\\Validation\\Extra\\SpoofCheckValidation' => $vendorDir . '/egulias/email-validator/src/Validation/Extra/SpoofCheckValidation.php',
    'Egulias\\EmailValidator\\Validation\\MessageIDValidation' => $vendorDir . '/egulias/email-validator/src/Validation/MessageIDValidation.php',
    'Egulias\\EmailValidator\\Validation\\MultipleValidationWithAnd' => $vendorDir . '/egulias/email-validator/src/Validation/MultipleValidationWithAnd.php',
    'Egulias\\EmailValidator\\Validation\\NoRFCWarningsValidation' => $vendorDir . '/egulias/email-validator/src/Validation/NoRFCWarningsValidation.php',
    'Egulias\\EmailValidator\\Validation\\RFCValidation' => $vendorDir . '/egulias/email-validator/src/Validation/RFCValidation.php',
    'Egulias\\EmailValidator\\Warning\\AddressLiteral' => $vendorDir . '/egulias/email-validator/src/Warning/AddressLiteral.php',
    'Egulias\\EmailValidator\\Warning\\CFWSNearAt' => $vendorDir . '/egulias/email-validator/src/Warning/CFWSNearAt.php',
    'Egulias\\EmailValidator\\Warning\\CFWSWithFWS' => $vendorDir . '/egulias/email-validator/src/Warning/CFWSWithFWS.php',
    'Egulias\\EmailValidator\\Warning\\Comment' => $vendorDir . '/egulias/email-validator/src/Warning/Comment.php',
    'Egulias\\EmailValidator\\Warning\\DeprecatedComment' => $vendorDir . '/egulias/email-validator/src/Warning/DeprecatedComment.php',
    'Egulias\\EmailValidator\\Warning\\DomainLiteral' => $vendorDir . '/egulias/email-validator/src/Warning/DomainLiteral.php',
    'Egulias\\EmailValidator\\Warning\\EmailTooLong' => $vendorDir . '/egulias/email-validator/src/Warning/EmailTooLong.php',
    'Egulias\\EmailValidator\\Warning\\IPV6BadChar' => $vendorDir . '/egulias/email-validator/src/Warning/IPV6BadChar.php',
    'Egulias\\EmailValidator\\Warning\\IPV6ColonEnd' => $vendorDir . '/egulias/email-validator/src/Warning/IPV6ColonEnd.php',
    'Egulias\\EmailValidator\\Warning\\IPV6ColonStart' => $vendorDir . '/egulias/email-validator/src/Warning/IPV6ColonStart.php',
    'Egulias\\EmailValidator\\Warning\\IPV6Deprecated' => $vendorDir . '/egulias/email-validator/src/Warning/IPV6Deprecated.php',
    'Egulias\\EmailValidator\\Warning\\IPV6DoubleColon' => $vendorDir . '/egulias/email-validator/src/Warning/IPV6DoubleColon.php',
    'Egulias\\EmailValidator\\Warning\\IPV6GroupCount' => $vendorDir . '/egulias/email-validator/src/Warning/IPV6GroupCount.php',
    'Egulias\\EmailValidator\\Warning\\IPV6MaxGroups' => $vendorDir . '/egulias/email-validator/src/Warning/IPV6MaxGroups.php',
    'Egulias\\EmailValidator\\Warning\\LocalTooLong' => $vendorDir . '/egulias/email-validator/src/Warning/LocalTooLong.php',
    'Egulias\\EmailValidator\\Warning\\NoDNSMXRecord' => $vendorDir . '/egulias/email-validator/src/Warning/NoDNSMXRecord.php',
    'Egulias\\EmailValidator\\Warning\\ObsoleteDTEXT' => $vendorDir . '/egulias/email-validator/src/Warning/ObsoleteDTEXT.php',
    'Egulias\\EmailValidator\\Warning\\QuotedPart' => $vendorDir . '/egulias/email-validator/src/Warning/QuotedPart.php',
    'Egulias\\EmailValidator\\Warning\\QuotedString' => $vendorDir . '/egulias/email-validator/src/Warning/QuotedString.php',
    'Egulias\\EmailValidator\\Warning\\TLD' => $vendorDir . '/egulias/email-validator/src/Warning/TLD.php',
    'Egulias\\EmailValidator\\Warning\\Warning' => $vendorDir . '/egulias/email-validator/src/Warning/Warning.php',
    'Normalizer' => $vendorDir . '/symfony/polyfill-intl-normalizer/Resources/stubs/Normalizer.php',
    'Psr\\Container\\ContainerExceptionInterface' => $vendorDir . '/psr/container/src/ContainerExceptionInterface.php',
    'Psr\\Container\\ContainerInterface' => $vendorDir . '/psr/container/src/ContainerInterface.php',
    'Psr\\Container\\NotFoundExceptionInterface' => $vendorDir . '/psr/container/src/NotFoundExceptionInterface.php',
    'Psr\\EventDispatcher\\EventDispatcherInterface' => $vendorDir . '/psr/event-dispatcher/src/EventDispatcherInterface.php',
    'Psr\\EventDispatcher\\ListenerProviderInterface' => $vendorDir . '/psr/event-dispatcher/src/ListenerProviderInterface.php',
    'Psr\\EventDispatcher\\StoppableEventInterface' => $vendorDir . '/psr/event-dispatcher/src/StoppableEventInterface.php',
    'Psr\\Log\\AbstractLogger' => $vendorDir . '/psr/log/src/AbstractLogger.php',
    'Psr\\Log\\InvalidArgumentException' => $vendorDir . '/psr/log/src/InvalidArgumentException.php',
    'Psr\\Log\\LogLevel' => $vendorDir . '/psr/log/src/LogLevel.php',
    'Psr\\Log\\LoggerAwareInterface' => $vendorDir . '/psr/log/src/LoggerAwareInterface.php',
    'Psr\\Log\\LoggerAwareTrait' => $vendorDir . '/psr/log/src/LoggerAwareTrait.php',
    'Psr\\Log\\LoggerInterface' => $vendorDir . '/psr/log/src/LoggerInterface.php',
    'Psr\\Log\\LoggerTrait' => $vendorDir . '/psr/log/src/LoggerTrait.php',
    'Psr\\Log\\NullLogger' => $vendorDir . '/psr/log/src/NullLogger.php',
    'Symfony\\Component\\EventDispatcher\\Attribute\\AsEventListener' => $vendorDir . '/symfony/event-dispatcher/Attribute/AsEventListener.php',
    'Symfony\\Component\\EventDispatcher\\Debug\\TraceableEventDispatcher' => $vendorDir . '/symfony/event-dispatcher/Debug/TraceableEventDispatcher.php',
    'Symfony\\Component\\EventDispatcher\\Debug\\WrappedListener' => $vendorDir . '/symfony/event-dispatcher/Debug/WrappedListener.php',
    'Symfony\\Component\\EventDispatcher\\DependencyInjection\\AddEventAliasesPass' => $vendorDir . '/symfony/event-dispatcher/DependencyInjection/AddEventAliasesPass.php',
    'Symfony\\Component\\EventDispatcher\\DependencyInjection\\RegisterListenersPass' => $vendorDir . '/symfony/event-dispatcher/DependencyInjection/RegisterListenersPass.php',
    'Symfony\\Component\\EventDispatcher\\EventDispatcher' => $vendorDir . '/symfony/event-dispatcher/EventDispatcher.php',
    'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => $vendorDir . '/symfony/event-dispatcher/EventDispatcherInterface.php',
    'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface' => $vendorDir . '/symfony/event-dispatcher/EventSubscriberInterface.php',
    'Symfony\\Component\\EventDispatcher\\GenericEvent' => $vendorDir . '/symfony/event-dispatcher/GenericEvent.php',
    'Symfony\\Component\\EventDispatcher\\ImmutableEventDispatcher' => $vendorDir . '/symfony/event-dispatcher/ImmutableEventDispatcher.php',
    'Symfony\\Component\\Mailer\\Command\\MailerTestCommand' => $vendorDir . '/symfony/mailer/Command/MailerTestCommand.php',
    'Symfony\\Component\\Mailer\\DataCollector\\MessageDataCollector' => $vendorDir . '/symfony/mailer/DataCollector/MessageDataCollector.php',
    'Symfony\\Component\\Mailer\\DelayedEnvelope' => $vendorDir . '/symfony/mailer/DelayedEnvelope.php',
    'Symfony\\Component\\Mailer\\Envelope' => $vendorDir . '/symfony/mailer/Envelope.php',
    'Symfony\\Component\\Mailer\\EventListener\\EnvelopeListener' => $vendorDir . '/symfony/mailer/EventListener/EnvelopeListener.php',
    'Symfony\\Component\\Mailer\\EventListener\\MessageListener' => $vendorDir . '/symfony/mailer/EventListener/MessageListener.php',
    'Symfony\\Component\\Mailer\\EventListener\\MessageLoggerListener' => $vendorDir . '/symfony/mailer/EventListener/MessageLoggerListener.php',
    'Symfony\\Component\\Mailer\\EventListener\\MessengerTransportListener' => $vendorDir . '/symfony/mailer/EventListener/MessengerTransportListener.php',
    'Symfony\\Component\\Mailer\\Event\\FailedMessageEvent' => $vendorDir . '/symfony/mailer/Event/FailedMessageEvent.php',
    'Symfony\\Component\\Mailer\\Event\\MessageEvent' => $vendorDir . '/symfony/mailer/Event/MessageEvent.php',
    'Symfony\\Component\\Mailer\\Event\\MessageEvents' => $vendorDir . '/symfony/mailer/Event/MessageEvents.php',
    'Symfony\\Component\\Mailer\\Event\\SentMessageEvent' => $vendorDir . '/symfony/mailer/Event/SentMessageEvent.php',
    'Symfony\\Component\\Mailer\\Exception\\ExceptionInterface' => $vendorDir . '/symfony/mailer/Exception/ExceptionInterface.php',
    'Symfony\\Component\\Mailer\\Exception\\HttpTransportException' => $vendorDir . '/symfony/mailer/Exception/HttpTransportException.php',
    'Symfony\\Component\\Mailer\\Exception\\IncompleteDsnException' => $vendorDir . '/symfony/mailer/Exception/IncompleteDsnException.php',
    'Symfony\\Component\\Mailer\\Exception\\InvalidArgumentException' => $vendorDir . '/symfony/mailer/Exception/InvalidArgumentException.php',
    'Symfony\\Component\\Mailer\\Exception\\LogicException' => $vendorDir . '/symfony/mailer/Exception/LogicException.php',
    'Symfony\\Component\\Mailer\\Exception\\RuntimeException' => $vendorDir . '/symfony/mailer/Exception/RuntimeException.php',
    'Symfony\\Component\\Mailer\\Exception\\TransportException' => $vendorDir . '/symfony/mailer/Exception/TransportException.php',
    'Symfony\\Component\\Mailer\\Exception\\TransportExceptionInterface' => $vendorDir . '/symfony/mailer/Exception/TransportExceptionInterface.php',
    'Symfony\\Component\\Mailer\\Exception\\UnsupportedSchemeException' => $vendorDir . '/symfony/mailer/Exception/UnsupportedSchemeException.php',
    'Symfony\\Component\\Mailer\\Header\\MetadataHeader' => $vendorDir . '/symfony/mailer/Header/MetadataHeader.php',
    'Symfony\\Component\\Mailer\\Header\\TagHeader' => $vendorDir . '/symfony/mailer/Header/TagHeader.php',
    'Symfony\\Component\\Mailer\\Mailer' => $vendorDir . '/symfony/mailer/Mailer.php',
    'Symfony\\Component\\Mailer\\MailerInterface' => $vendorDir . '/symfony/mailer/MailerInterface.php',
    'Symfony\\Component\\Mailer\\Messenger\\MessageHandler' => $vendorDir . '/symfony/mailer/Messenger/MessageHandler.php',
    'Symfony\\Component\\Mailer\\Messenger\\SendEmailMessage' => $vendorDir . '/symfony/mailer/Messenger/SendEmailMessage.php',
    'Symfony\\Component\\Mailer\\SentMessage' => $vendorDir . '/symfony/mailer/SentMessage.php',
    'Symfony\\Component\\Mailer\\Test\\Constraint\\EmailCount' => $vendorDir . '/symfony/mailer/Test/Constraint/EmailCount.php',
    'Symfony\\Component\\Mailer\\Test\\Constraint\\EmailIsQueued' => $vendorDir . '/symfony/mailer/Test/Constraint/EmailIsQueued.php',
    'Symfony\\Component\\Mailer\\Test\\TransportFactoryTestCase' => $vendorDir . '/symfony/mailer/Test/TransportFactoryTestCase.php',
    'Symfony\\Component\\Mailer\\Transport' => $vendorDir . '/symfony/mailer/Transport.php',
    'Symfony\\Component\\Mailer\\Transport\\AbstractApiTransport' => $vendorDir . '/symfony/mailer/Transport/AbstractApiTransport.php',
    'Symfony\\Component\\Mailer\\Transport\\AbstractHttpTransport' => $vendorDir . '/symfony/mailer/Transport/AbstractHttpTransport.php',
    'Symfony\\Component\\Mailer\\Transport\\AbstractTransport' => $vendorDir . '/symfony/mailer/Transport/AbstractTransport.php',
    'Symfony\\Component\\Mailer\\Transport\\AbstractTransportFactory' => $vendorDir . '/symfony/mailer/Transport/AbstractTransportFactory.php',
    'Symfony\\Component\\Mailer\\Transport\\Dsn' => $vendorDir . '/symfony/mailer/Transport/Dsn.php',
    'Symfony\\Component\\Mailer\\Transport\\FailoverTransport' => $vendorDir . '/symfony/mailer/Transport/FailoverTransport.php',
    'Symfony\\Component\\Mailer\\Transport\\NativeTransportFactory' => $vendorDir . '/symfony/mailer/Transport/NativeTransportFactory.php',
    'Symfony\\Component\\Mailer\\Transport\\NullTransport' => $vendorDir . '/symfony/mailer/Transport/NullTransport.php',
    'Symfony\\Component\\Mailer\\Transport\\NullTransportFactory' => $vendorDir . '/symfony/mailer/Transport/NullTransportFactory.php',
    'Symfony\\Component\\Mailer\\Transport\\RoundRobinTransport' => $vendorDir . '/symfony/mailer/Transport/RoundRobinTransport.php',
    'Symfony\\Component\\Mailer\\Transport\\SendmailTransport' => $vendorDir . '/symfony/mailer/Transport/SendmailTransport.php',
    'Symfony\\Component\\Mailer\\Transport\\SendmailTransportFactory' => $vendorDir . '/symfony/mailer/Transport/SendmailTransportFactory.php',
    'Symfony\\Component\\Mailer\\Transport\\Smtp\\Auth\\AuthenticatorInterface' => $vendorDir . '/symfony/mailer/Transport/Smtp/Auth/AuthenticatorInterface.php',
    'Symfony\\Component\\Mailer\\Transport\\Smtp\\Auth\\CramMd5Authenticator' => $vendorDir . '/symfony/mailer/Transport/Smtp/Auth/CramMd5Authenticator.php',
    'Symfony\\Component\\Mailer\\Transport\\Smtp\\Auth\\LoginAuthenticator' => $vendorDir . '/symfony/mailer/Transport/Smtp/Auth/LoginAuthenticator.php',
    'Symfony\\Component\\Mailer\\Transport\\Smtp\\Auth\\PlainAuthenticator' => $vendorDir . '/symfony/mailer/Transport/Smtp/Auth/PlainAuthenticator.php',
    'Symfony\\Component\\Mailer\\Transport\\Smtp\\Auth\\XOAuth2Authenticator' => $vendorDir . '/symfony/mailer/Transport/Smtp/Auth/XOAuth2Authenticator.php',
    'Symfony\\Component\\Mailer\\Transport\\Smtp\\EsmtpTransport' => $vendorDir . '/symfony/mailer/Transport/Smtp/EsmtpTransport.php',
    'Symfony\\Component\\Mailer\\Transport\\Smtp\\EsmtpTransportFactory' => $vendorDir . '/symfony/mailer/Transport/Smtp/EsmtpTransportFactory.php',
    'Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport' => $vendorDir . '/symfony/mailer/Transport/Smtp/SmtpTransport.php',
    'Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\AbstractStream' => $vendorDir . '/symfony/mailer/Transport/Smtp/Stream/AbstractStream.php',
    'Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\ProcessStream' => $vendorDir . '/symfony/mailer/Transport/Smtp/Stream/ProcessStream.php',
    'Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\SocketStream' => $vendorDir . '/symfony/mailer/Transport/Smtp/Stream/SocketStream.php',
    'Symfony\\Component\\Mailer\\Transport\\TransportFactoryInterface' => $vendorDir . '/symfony/mailer/Transport/TransportFactoryInterface.php',
    'Symfony\\Component\\Mailer\\Transport\\TransportInterface' => $vendorDir . '/symfony/mailer/Transport/TransportInterface.php',
    'Symfony\\Component\\Mailer\\Transport\\Transports' => $vendorDir . '/symfony/mailer/Transport/Transports.php',
    'Symfony\\Component\\Mime\\Address' => $vendorDir . '/symfony/mime/Address.php',
    'Symfony\\Component\\Mime\\BodyRendererInterface' => $vendorDir . '/symfony/mime/BodyRendererInterface.php',
    'Symfony\\Component\\Mime\\CharacterStream' => $vendorDir . '/symfony/mime/CharacterStream.php',
    'Symfony\\Component\\Mime\\Crypto\\DkimOptions' => $vendorDir . '/symfony/mime/Crypto/DkimOptions.php',
    'Symfony\\Component\\Mime\\Crypto\\DkimSigner' => $vendorDir . '/symfony/mime/Crypto/DkimSigner.php',
    'Symfony\\Component\\Mime\\Crypto\\SMime' => $vendorDir . '/symfony/mime/Crypto/SMime.php',
    'Symfony\\Component\\Mime\\Crypto\\SMimeEncrypter' => $vendorDir . '/symfony/mime/Crypto/SMimeEncrypter.php',
    'Symfony\\Component\\Mime\\Crypto\\SMimeSigner' => $vendorDir . '/symfony/mime/Crypto/SMimeSigner.php',
    'Symfony\\Component\\Mime\\DependencyInjection\\AddMimeTypeGuesserPass' => $vendorDir . '/symfony/mime/DependencyInjection/AddMimeTypeGuesserPass.php',
    'Symfony\\Component\\Mime\\DraftEmail' => $vendorDir . '/symfony/mime/DraftEmail.php',
    'Symfony\\Component\\Mime\\Email' => $vendorDir . '/symfony/mime/Email.php',
    'Symfony\\Component\\Mime\\Encoder\\AddressEncoderInterface' => $vendorDir . '/symfony/mime/Encoder/AddressEncoderInterface.php',
    'Symfony\\Component\\Mime\\Encoder\\Base64ContentEncoder' => $vendorDir . '/symfony/mime/Encoder/Base64ContentEncoder.php',
    'Symfony\\Component\\Mime\\Encoder\\Base64Encoder' => $vendorDir . '/symfony/mime/Encoder/Base64Encoder.php',
    'Symfony\\Component\\Mime\\Encoder\\Base64MimeHeaderEncoder' => $vendorDir . '/symfony/mime/Encoder/Base64MimeHeaderEncoder.php',
    'Symfony\\Component\\Mime\\Encoder\\ContentEncoderInterface' => $vendorDir . '/symfony/mime/Encoder/ContentEncoderInterface.php',
    'Symfony\\Component\\Mime\\Encoder\\EightBitContentEncoder' => $vendorDir . '/symfony/mime/Encoder/EightBitContentEncoder.php',
    'Symfony\\Component\\Mime\\Encoder\\EncoderInterface' => $vendorDir . '/symfony/mime/Encoder/EncoderInterface.php',
    'Symfony\\Component\\Mime\\Encoder\\IdnAddressEncoder' => $vendorDir . '/symfony/mime/Encoder/IdnAddressEncoder.php',
    'Symfony\\Component\\Mime\\Encoder\\MimeHeaderEncoderInterface' => $vendorDir . '/symfony/mime/Encoder/MimeHeaderEncoderInterface.php',
    'Symfony\\Component\\Mime\\Encoder\\QpContentEncoder' => $vendorDir . '/symfony/mime/Encoder/QpContentEncoder.php',
    'Symfony\\Component\\Mime\\Encoder\\QpEncoder' => $vendorDir . '/symfony/mime/Encoder/QpEncoder.php',
    'Symfony\\Component\\Mime\\Encoder\\QpMimeHeaderEncoder' => $vendorDir . '/symfony/mime/Encoder/QpMimeHeaderEncoder.php',
    'Symfony\\Component\\Mime\\Encoder\\Rfc2231Encoder' => $vendorDir . '/symfony/mime/Encoder/Rfc2231Encoder.php',
    'Symfony\\Component\\Mime\\Exception\\AddressEncoderException' => $vendorDir . '/symfony/mime/Exception/AddressEncoderException.php',
    'Symfony\\Component\\Mime\\Exception\\ExceptionInterface' => $vendorDir . '/symfony/mime/Exception/ExceptionInterface.php',
    'Symfony\\Component\\Mime\\Exception\\InvalidArgumentException' => $vendorDir . '/symfony/mime/Exception/InvalidArgumentException.php',
    'Symfony\\Component\\Mime\\Exception\\LogicException' => $vendorDir . '/symfony/mime/Exception/LogicException.php',
    'Symfony\\Component\\Mime\\Exception\\RfcComplianceException' => $vendorDir . '/symfony/mime/Exception/RfcComplianceException.php',
    'Symfony\\Component\\Mime\\Exception\\RuntimeException' => $vendorDir . '/symfony/mime/Exception/RuntimeException.php',
    'Symfony\\Component\\Mime\\FileBinaryMimeTypeGuesser' => $vendorDir . '/symfony/mime/FileBinaryMimeTypeGuesser.php',
    'Symfony\\Component\\Mime\\FileinfoMimeTypeGuesser' => $vendorDir . '/symfony/mime/FileinfoMimeTypeGuesser.php',
    'Symfony\\Component\\Mime\\Header\\AbstractHeader' => $vendorDir . '/symfony/mime/Header/AbstractHeader.php',
    'Symfony\\Component\\Mime\\Header\\DateHeader' => $vendorDir . '/symfony/mime/Header/DateHeader.php',
    'Symfony\\Component\\Mime\\Header\\HeaderInterface' => $vendorDir . '/symfony/mime/Header/HeaderInterface.php',
    'Symfony\\Component\\Mime\\Header\\Headers' => $vendorDir . '/symfony/mime/Header/Headers.php',
    'Symfony\\Component\\Mime\\Header\\IdentificationHeader' => $vendorDir . '/symfony/mime/Header/IdentificationHeader.php',
    'Symfony\\Component\\Mime\\Header\\MailboxHeader' => $vendorDir . '/symfony/mime/Header/MailboxHeader.php',
    'Symfony\\Component\\Mime\\Header\\MailboxListHeader' => $vendorDir . '/symfony/mime/Header/MailboxListHeader.php',
    'Symfony\\Component\\Mime\\Header\\ParameterizedHeader' => $vendorDir . '/symfony/mime/Header/ParameterizedHeader.php',
    'Symfony\\Component\\Mime\\Header\\PathHeader' => $vendorDir . '/symfony/mime/Header/PathHeader.php',
    'Symfony\\Component\\Mime\\Header\\UnstructuredHeader' => $vendorDir . '/symfony/mime/Header/UnstructuredHeader.php',
    'Symfony\\Component\\Mime\\HtmlToTextConverter\\DefaultHtmlToTextConverter' => $vendorDir . '/symfony/mime/HtmlToTextConverter/DefaultHtmlToTextConverter.php',
    'Symfony\\Component\\Mime\\HtmlToTextConverter\\HtmlToTextConverterInterface' => $vendorDir . '/symfony/mime/HtmlToTextConverter/HtmlToTextConverterInterface.php',
    'Symfony\\Component\\Mime\\HtmlToTextConverter\\LeagueHtmlToMarkdownConverter' => $vendorDir . '/symfony/mime/HtmlToTextConverter/LeagueHtmlToMarkdownConverter.php',
    'Symfony\\Component\\Mime\\Message' => $vendorDir . '/symfony/mime/Message.php',
    'Symfony\\Component\\Mime\\MessageConverter' => $vendorDir . '/symfony/mime/MessageConverter.php',
    'Symfony\\Component\\Mime\\MimeTypeGuesserInterface' => $vendorDir . '/symfony/mime/MimeTypeGuesserInterface.php',
    'Symfony\\Component\\Mime\\MimeTypes' => $vendorDir . '/symfony/mime/MimeTypes.php',
    'Symfony\\Component\\Mime\\MimeTypesInterface' => $vendorDir . '/symfony/mime/MimeTypesInterface.php',
    'Symfony\\Component\\Mime\\Part\\AbstractMultipartPart' => $vendorDir . '/symfony/mime/Part/AbstractMultipartPart.php',
    'Symfony\\Component\\Mime\\Part\\AbstractPart' => $vendorDir . '/symfony/mime/Part/AbstractPart.php',
    'Symfony\\Component\\Mime\\Part\\DataPart' => $vendorDir . '/symfony/mime/Part/DataPart.php',
    'Symfony\\Component\\Mime\\Part\\File' => $vendorDir . '/symfony/mime/Part/File.php',
    'Symfony\\Component\\Mime\\Part\\MessagePart' => $vendorDir . '/symfony/mime/Part/MessagePart.php',
    'Symfony\\Component\\Mime\\Part\\Multipart\\AlternativePart' => $vendorDir . '/symfony/mime/Part/Multipart/AlternativePart.php',
    'Symfony\\Component\\Mime\\Part\\Multipart\\DigestPart' => $vendorDir . '/symfony/mime/Part/Multipart/DigestPart.php',
    'Symfony\\Component\\Mime\\Part\\Multipart\\FormDataPart' => $vendorDir . '/symfony/mime/Part/Multipart/FormDataPart.php',
    'Symfony\\Component\\Mime\\Part\\Multipart\\MixedPart' => $vendorDir . '/symfony/mime/Part/Multipart/MixedPart.php',
    'Symfony\\Component\\Mime\\Part\\Multipart\\RelatedPart' => $vendorDir . '/symfony/mime/Part/Multipart/RelatedPart.php',
    'Symfony\\Component\\Mime\\Part\\SMimePart' => $vendorDir . '/symfony/mime/Part/SMimePart.php',
    'Symfony\\Component\\Mime\\Part\\TextPart' => $vendorDir . '/symfony/mime/Part/TextPart.php',
    'Symfony\\Component\\Mime\\RawMessage' => $vendorDir . '/symfony/mime/RawMessage.php',
    'Symfony\\Component\\Mime\\Test\\Constraint\\EmailAddressContains' => $vendorDir . '/symfony/mime/Test/Constraint/EmailAddressContains.php',
    'Symfony\\Component\\Mime\\Test\\Constraint\\EmailAttachmentCount' => $vendorDir . '/symfony/mime/Test/Constraint/EmailAttachmentCount.php',
    'Symfony\\Component\\Mime\\Test\\Constraint\\EmailHasHeader' => $vendorDir . '/symfony/mime/Test/Constraint/EmailHasHeader.php',
    'Symfony\\Component\\Mime\\Test\\Constraint\\EmailHeaderSame' => $vendorDir . '/symfony/mime/Test/Constraint/EmailHeaderSame.php',
    'Symfony\\Component\\Mime\\Test\\Constraint\\EmailHtmlBodyContains' => $vendorDir . '/symfony/mime/Test/Constraint/EmailHtmlBodyContains.php',
    'Symfony\\Component\\Mime\\Test\\Constraint\\EmailTextBodyContains' => $vendorDir . '/symfony/mime/Test/Constraint/EmailTextBodyContains.php',
    'Symfony\\Contracts\\EventDispatcher\\Event' => $vendorDir . '/symfony/event-dispatcher-contracts/Event.php',
    'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => $vendorDir . '/symfony/event-dispatcher-contracts/EventDispatcherInterface.php',
    'Symfony\\Contracts\\Service\\Attribute\\Required' => $vendorDir . '/symfony/service-contracts/Attribute/Required.php',
    'Symfony\\Contracts\\Service\\Attribute\\SubscribedService' => $vendorDir . '/symfony/service-contracts/Attribute/SubscribedService.php',
    'Symfony\\Contracts\\Service\\ResetInterface' => $vendorDir . '/symfony/service-contracts/ResetInterface.php',
    'Symfony\\Contracts\\Service\\ServiceLocatorTrait' => $vendorDir . '/symfony/service-contracts/ServiceLocatorTrait.php',
    'Symfony\\Contracts\\Service\\ServiceProviderInterface' => $vendorDir . '/symfony/service-contracts/ServiceProviderInterface.php',
    'Symfony\\Contracts\\Service\\ServiceSubscriberInterface' => $vendorDir . '/symfony/service-contracts/ServiceSubscriberInterface.php',
    'Symfony\\Contracts\\Service\\ServiceSubscriberTrait' => $vendorDir . '/symfony/service-contracts/ServiceSubscriberTrait.php',
    'Symfony\\Polyfill\\Intl\\Idn\\Idn' => $vendorDir . '/symfony/polyfill-intl-idn/Idn.php',
    'Symfony\\Polyfill\\Intl\\Idn\\Info' => $vendorDir . '/symfony/polyfill-intl-idn/Info.php',
    'Symfony\\Polyfill\\Intl\\Idn\\Resources\\unidata\\DisallowedRanges' => $vendorDir . '/symfony/polyfill-intl-idn/Resources/unidata/DisallowedRanges.php',
    'Symfony\\Polyfill\\Intl\\Idn\\Resources\\unidata\\Regex' => $vendorDir . '/symfony/polyfill-intl-idn/Resources/unidata/Regex.php',
    'Symfony\\Polyfill\\Intl\\Normalizer\\Normalizer' => $vendorDir . '/symfony/polyfill-intl-normalizer/Normalizer.php',
    'Symfony\\Polyfill\\Mbstring\\Mbstring' => $vendorDir . '/symfony/polyfill-mbstring/Mbstring.php',
    'Symfony\\Polyfill\\Php72\\Php72' => $vendorDir . '/symfony/polyfill-php72/Php72.php',
);
