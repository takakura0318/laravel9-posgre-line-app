<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\LinebotChannel
 *
 * @property int $id ID
 * @property int $linedevelopers_provider_id
 * @property int $channel_id チャンネルID
 * @property string $name チャンネル名
 * @property string $channel_secret チェンネルシークレット
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\LinedevelopersProvider $linedevelopersProvider
 * @method static \Database\Factories\LinebotChannelFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|LinebotChannel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LinebotChannel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LinebotChannel query()
 * @method static \Illuminate\Database\Eloquent\Builder|LinebotChannel whereChannelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinebotChannel whereChannelSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinebotChannel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinebotChannel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinebotChannel whereLinedevelopersProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinebotChannel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinebotChannel whereUpdatedAt($value)
 */
	class LinebotChannel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LinedevelopersProvider
 *
 * @property int $id ID
 * @property int $provider_id プロバイダーID
 * @property string $name プロバイダー名
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\LinebotChannel[] $linebotChannels
 * @property-read int|null $linebot_channels_count
 * @method static \Database\Factories\LinedevelopersProviderFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedevelopersProvider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LinedevelopersProvider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LinedevelopersProvider query()
 * @method static \Illuminate\Database\Eloquent\Builder|LinedevelopersProvider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedevelopersProvider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedevelopersProvider whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedevelopersProvider whereProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedevelopersProvider whereUpdatedAt($value)
 */
	class LinedevelopersProvider extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LineloginChannel
 *
 * @property int $id ID
 * @property int $linedevelopers_provider_id
 * @property int $channel_id チャンネルID
 * @property string $name チャンネル名
 * @property string $channel_secret チェンネルシークレット
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\LinedevelopersProvider $linedevelopersProvider
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Database\Factories\LineloginChannelFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|LineloginChannel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LineloginChannel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LineloginChannel query()
 * @method static \Illuminate\Database\Eloquent\Builder|LineloginChannel whereChannelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LineloginChannel whereChannelSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LineloginChannel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LineloginChannel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LineloginChannel whereLinedevelopersProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LineloginChannel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LineloginChannel whereUpdatedAt($value)
 */
	class LineloginChannel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LivewireTutorialTodo
 *
 * @property int $id
 * @property string $title タイトル
 * @property string $content コンテンツ
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|LivewireTutorialTodo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LivewireTutorialTodo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LivewireTutorialTodo query()
 * @method static \Illuminate\Database\Eloquent\Builder|LivewireTutorialTodo whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LivewireTutorialTodo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LivewireTutorialTodo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LivewireTutorialTodo whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LivewireTutorialTodo whereUpdatedAt($value)
 */
	class LivewireTutorialTodo extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Membership
 *
 * @property int $id
 * @property int $team_id
 * @property int $user_id
 * @property string|null $role
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Membership newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Membership newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Membership query()
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereUserId($value)
 */
	class Membership extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Team
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property bool $personal_team
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $owner
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TeamInvitation[] $teamInvitations
 * @property-read int|null $team_invitations_count
 * @property-read \App\Models\User|null $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Database\Factories\TeamFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Team newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team query()
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team wherePersonalTeam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereUserId($value)
 */
	class Team extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TeamInvitation
 *
 * @property int $id
 * @property int $team_id
 * @property string $email
 * @property string|null $role
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Team $team
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation query()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereUpdatedAt($value)
 */
	class TeamInvitation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $two_factor_confirmed_at
 * @property-read \App\Models\Team|null $currentTeam
 * @property-read string $profile_photo_url
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\LineloginChannel[] $lineloginChannels
 * @property-read int|null $linelogin_channels_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Team[] $ownedTeams
 * @property-read int|null $owned_teams_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Team[] $teams
 * @property-read int|null $teams_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

