@extends('admin.layouts')
@section('css')
@endsection
@section('content')
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content" style="padding-top:0;">
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="row">
            <div class="col-md-4">
                <div class="tab-pane active">
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <span class="caption-subject font-dark">生成邀请码</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="alert alert-info">
                                <i class="fa fa-warning"></i>
                                每次仅生成 <strong> 10 </strong> 枚邀请码，{{\App\Components\Helpers::systemConfig()['admin_invite_days']}}天内有效
                            </div>
                            <button type="submit" class="btn blue" onclick="makeInvite()"> 生 成 </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-pane active">
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <span class="caption-subject font-dark">邀请码列表</span>
                            </div>
                            <div class="actions">
                                <div class="btn-group btn-group-devided" data-toggle="buttons">
                                    <button class="btn blue" onclick="exportInvite()"> 导出 </button>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-scrollable table-scrollable-borderless">
                                <table class="table table-hover table-light">
                                    <thead>
                                        <tr>
                                            <th> # </th>
                                            <th> 邀请码 </th>
                                            <th> 有效期 </th>
                                            <th> 生成者 </th>
                                            <th> 状态 </th>
                                            <th> 使用者 </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($inviteList->isEmpty())
                                            <tr>
                                                <td colspan="6" style="text-align: center;">暂无数据</td>
                                            </tr>
                                        @else
                                            @foreach($inviteList as $invite)
                                                <tr>
                                                    <td> {{$invite->id}} </td>
                                                    <td> <a href="/register?code={{$invite->code}}" target="_blank">{{$invite->code}}</a> </td>
                                                    <td> {{$invite->dateline}} </td>
                                                    <td>
                                                        @if($invite->uid == '0')
                                                            系统生成
                                                        @else
                                                            {{empty($invite->generator) ? '【账号已删除】' : $invite->generator->username}}
                                                        @endif
                                                    </td>
                                                    <td> {!! $invite->status_label !!} </td>
                                                    <td> {{empty($invite->user) ? '' : $invite->user->username}} </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="dataTables_info" role="status" aria-live="polite">共 {{$inviteList->total()}} 个邀请码</div>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <div class="dataTables_paginate paging_bootstrap_full_number pull-right">
                                        {{ $inviteList->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
@endsection
@section('script')
    <script type="text/javascript">
        // 生成邀请码
        function makeInvite() {
            $.ajax({
                type: "POST",
                url: "/admin/makeInvite",
                async: false,
                data: {_token:'{{csrf_token()}}'},
                dataType: 'json',
                success: function (ret) {
                    layer.msg(ret.message, {time:1000}, function() {
                        if (ret.status == 'success') {
                            window.location.reload();
                        }
                    });
                }
            });

            return false;
        }

        // 导出邀请码
        function exportInvite() {
            layer.confirm("确定导出所有邀请码吗？", {icon:3, title: '提示'}, function (index) {
                window.location.href = '/admin/exportInvite';

                layer.close(index);
            });
        }
    </script>
@endsection